<?php

namespace DocSpring;

/**
 * Checks webhook requests' X-DocSpring-Signature header (https://docspring.com/docs/webhooks/verifying-signatures/).
 */
final class Webhooks
{
    /** The number of seconds a webhook request's signature stays valid (verifyWebhookSignature) */
    public const SIGNATURE_TOLERANCE = 300;

    /**
     * Checks a webhook request's X-DocSpring-Signature header. Returns true when one of its v1 signatures is the
     * HMAC-SHA256 of "{t}.{payload}" with the webhook's secret, and its timestamp t is at most $tolerance seconds from
     * $now. Returns false for anything else, including a missing or malformed header.
     *
     * @param string $payload The request body exactly as it was received (file_get_contents('php://input')), not
     *                        parsed JSON.
     * @param string $signatureHeader The X-DocSpring-Signature header.
     * @param string $secret The webhook's signing secret.
     * @param int $tolerance How many seconds old (or early) the timestamp can be. 5 minutes by default.
     * @param int|null $now The current Unix time in seconds, for tests. The system clock by default.
     */
    public static function verifyWebhookSignature(
        string $payload,
        string $signatureHeader,
        string $secret,
        int $tolerance = self::SIGNATURE_TOLERANCE,
        ?int $now = null
    ): bool {
        if ($secret === '') {
            return false;
        }

        $timestamp = null;
        $signatures = [];
        foreach (explode(',', $signatureHeader) as $part) {
            $pair = explode('=', trim($part), 2);
            $value = $pair[1] ?? '';
            if ($pair[0] === 't' && $timestamp === null) {
                $timestamp = $value;
            } elseif ($pair[0] === 'v1' && $value !== '') {
                $signatures[] = $value;
            }
        }
        if ($timestamp === null || preg_match('/\A[0-9]+\z/', $timestamp) !== 1 || count($signatures) === 0) {
            return false;
        }

        $now ??= time();
        if (abs($now - (int) $timestamp) > $tolerance) {
            return false;
        }

        $expected = hash_hmac('sha256', $timestamp . '.' . $payload, $secret);
        foreach ($signatures as $signature) {
            // Constant time, so a timing attack can't find a valid signature byte by byte
            if (hash_equals($expected, $signature)) {
                return true;
            }
        }
        return false;
    }
}

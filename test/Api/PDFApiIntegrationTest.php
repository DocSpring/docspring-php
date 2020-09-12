<?php
/**
 * PDFApiTest
 * PHP version 5
 *
 * @category Class
 * @package  DocSpring
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API v1
 *
 * DocSpring is a service that helps you fill out and sign PDF templates.
 *
 * OpenAPI spec version: v1
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace DocSpring;

use \DocSpring\Configuration;
use \DocSpring\ApiException;
use \DocSpring\ObjectSerializer;

/**
 * PDFApiTest Class Doc Comment
 *
 * @category Class
 * @package  DocSpring
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PDFApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
      // Configure HTTP basic authorization: api_token_basic
      $config = \DocSpring\Configuration::getDefaultConfiguration()
                    ->setUsername('api_token123')
                    ->setPassword('testsecret123')
                    ->setHost('http://api.docspring.local:31337/api/v1');
      $this->docspring = new \DocSpring\Api\PDFApi(
          // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
          // This is optional, `GuzzleHttp\Client` will be used as default.
          new \GuzzleHttp\Client(),
          $config
      );
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for generatePDF
     *
     * Generates a new PDF.
     *
     */
    public function testGeneratePDF()
    {
      $docspring = $this->docspring;
      $template_id = 'tpl_000000000000000001'; // string |
      $submission_data = new \DocSpring\Model\SubmissionData();
      $submission_data->setData([
        "title" => 'Test PDF',
        "description" => 'This is a test PDF!',
      ]);
      $submission_data->setTest(false);
      $submission_data->setFieldOverrides([
        "title" => [
          "required" => false
        ]
      ]);
      $response = $docspring->generatePDF($template_id, $submission_data);
      $submission = $response->getSubmission();

      $this->assertEquals('success', $response->getStatus());
      $this->assertStringStartsWith('sub_', $submission->getId());
      $this->assertEquals(False, $submission->getExpired());
      $this->assertEquals('pending', $submission->getState());
    }

    /**
     * Test case for batchGeneratePDF
     *
     * Generates multiple PDFs.
     *
     */
    public function testBatchGeneratePdfs()
    {
      $template_id = 'tpl_000000000000000001'; // string |

      $batchGenerateData = json_encode([
        "template_id" => $template_id,
        "submissions" => array(
          [
            'data' => [
              "title" => 'Test PDF',
              "description" => 'This PDF is great!',
            ]
          ],
          [
            'data' => [
              "title" => 'Test PDF 2',
              "description" => 'This PDF is also great!',
            ]
          ]
        )
      ]);
      $response = $this->docspring->batchGeneratePdfs($batchGenerateData);
      $this->assertEquals('success', $response->getStatus());

      $submissionResponses = $response->getSubmissions();
      $this->assertCount(2, $submissionResponses);

      $firstResponse = $submissionResponses[0];
      $this->assertEquals('success', $firstResponse->getStatus());
      $submission = $firstResponse->getSubmission();
      $this->assertStringStartsWith('sub_', $submission->getId());
      $this->assertEquals(False, $submission->getExpired());
      $this->assertEquals('pending', $submission->getState());
    }

    /**
     * Test case for combinePdfs
     *
     * Merge submission PDFs, template PDFs, or custom files.
     *
     */
    public function testCombinePdfs()
    {
      $combine_pdfs_data = new \DocSpring\Model\CombinePdfsData(); // \DocSpring\Model\CombinePdfsData |

      $combine_pdfs_data->setSourcePdfs(
        array(
          ['type' => 'submission', 'id' => 'sub_000000000000000001'],
          ['type' => 'submission', 'id' => 'sub_000000000000000002']
        )
      );
      $result = $this->docspring->combinePdfs($combine_pdfs_data);
      $this->assertEquals($result->getStatus(), 'success');
      $this->assertStringStartsWith('com_', $result->getCombinedSubmission()->getId());
    }

    /**
     * Test case for combineSubmissions
     *
     * Merge generated PDFs together.
     *
     */
    public function testCombineSubmissions()
    {
      $combined_submission_data = new Model\CombinedSubmissionData(); // \DocSpring\Model\CombinedSubmissionData |
      $combined_submission_data->setSubmissionIds(
        array('sub_000000000000000001', 'sub_000000000000000002'));
      $result = $this->docspring->combineSubmissions($combined_submission_data);
      $this->assertEquals($result->getStatus(), 'success');
      $this->assertStringStartsWith('com_', $result->getCombinedSubmission()->getId());
    }

    /**
     * Test case for expireCombinedSubmission
     *
     * Expire a combined submission.
     *
     */
    public function testExpireCombinedSubmission()
    {
      $combined_submission_id = 'com_000000000000000001'; // string |
      $result = $this->docspring->expireCombinedSubmission($combined_submission_id);
      $this->assertEquals($result->getExpired(), True);
    }

    /**
     * Test case for expireSubmission
     *
     * Expire a PDF submission.
     *
     */
    public function testExpireSubmission()
    {
      $submission_id = 'sub_000000000000000001'; // string |
      $result = $this->docspring->expireSubmission($submission_id);
      $this->assertEquals($result->getExpired(), True);
    }

    /**
     * Test case for generatePDF with data_requests
     *
     * Generates a new PDF.
     *
     */
    public function testGeneratePDFWithDataRequests()
    {
      $template_id = 'tpl_000000000000000001'; // string |

      $submission = new Model\SubmissionData();
      $submission->setData([
        "title" => 'Test PDF',
      ]);
      $submission->setDataRequests(array(
        [
          "name" => 'John Smith',
          "email" => 'jsmith@example.com',
          "fields" => array('description'),
          "order" => 1,
          "auth_type" => 'email_link'
        ]
      ));
      $response = $this->docspring->generatePDF($template_id, $submission);

      $this->assertEquals('success', $response->getStatus());
      $submission = $response->getSubmission();
      $this->assertStringStartsWith('sub_', $submission->getId());
      $this->assertEquals(False, $submission->getExpired());
      $this->assertEquals('waiting_for_data_requests', $submission->getState());

      $data_requests = $submission->getDataRequests();
      $this->assertCount(1, $data_requests);
      $data_request = $data_requests[0];

      $id = $data_request->getId();

      $this->assertStringStartsWith('drq_', $data_request->getId());
      $this->assertEquals('pending', $data_request->getState());
      $this->assertEquals(array('description'), $data_request->getFields());
      $this->assertEquals(1, $data_request->getOrder());
      $this->assertEquals('John Smith', $data_request->getName());
      $this->assertEquals('jsmith@example.com', $data_request->getEmail());
      $this->assertEquals('email_link', $data_request->getAuthType());

      // Also check that we can update the data request, and create a token
      $data_request_data = new Model\UpdateSubmissionDataRequestData([
        'auth_type' => 'oauth',
        'auth_provider' => 'google',
        'auth_session_started_at' => '2018-10-23T13:00:00Z'
      ]);
      $response = $this->docspring->updateDataRequest($id, $data_request_data);

      $data_request = $this->docspring->getDataRequest($id);
      $this->assertStringStartsWith('drq_', $data_request->getId());
      $this->assertEquals('pending', $data_request->getState());
      $this->assertEquals(array('description'), $data_request->getFields());
      $this->assertEquals(1, $data_request->getOrder());
      $this->assertEquals('John Smith', $data_request->getName());
      $this->assertEquals('oauth', $data_request->getAuthType());
      $this->assertEquals('google', $data_request->getAuthProvider());
      $this->assertEquals('2018-10-23T13:00:00Z', $data_request->getAuthSessionStartedAt());

      $response = $this->docspring->createDataRequestToken($id);
      $this->assertEquals('success', $response->getStatus());
      $token = $response->getToken();
      $this->assertNotEmpty($token->getId());
      $this->assertNotEmpty($token->getSecret());
      $this->assertNotEmpty($token->getExpiresAt());
      $this->assertNotEmpty($token->getDataRequestUrl());
    }

    /**
     * Test case for getCombinedSubmission
     *
     * Check the status of a combined submission (merged PDFs).
     *
     */
    public function testGetCombinedSubmission()
    {
      $combined_submission_id = 'com_000000000000000001'; // string |
      $result = $this->docspring->getCombinedSubmission($combined_submission_id);
      $this->assertStringStartsWith('com_', $result->getId());
    }

    /**
     * Test case for getSubmission
     *
     * Check the status of a PDF.
     *
     */
    public function testGetSubmission()
    {
      $submission_id = 'sub_000000000000000001'; // string |
      $result = $this->docspring->getSubmission($submission_id);
      $this->assertStringStartsWith('sub_', $result->getId());
    }

    /**
     * Test case for createHTMLTemplate
     *
     * Create a new HTML template.
     *
     */
    public function testCreateHTMLTemplate()
    {
      $docspring = $this->docspring;
      $create_template_data = new \DocSpring\Model\CreateTemplateData1([
        "template" => [
          "template_type" => "html",
          "name" => "Test HTML Template",
          "html" => "Test HTML",
          "scss" => "Test SCSS",
          "header_html" => "Test Header HTML",
          "footer_html" => "Test Header HTML",
        ]
      ]); // \DocSpring\Model\CreateTemplateData1 |
      $response = $this->docspring->createHTMLTemplate($create_template_data);
      $this->assertStringStartsWith('tpl_', $response->getId());
      $this->assertEquals('Test HTML Template', $response->getName());
    }

    /**
     * Test case for listTemplates
     *
     * Get a list of all templates.
     *
     */
    public function testListTemplates()
    {
      $query = 'API Client Test Template 2'; # String | Search By Name
      $page = 1; // int | Default: 1
      $per_page = 10; // int | Default: 50
      $responses = $this->docspring->listTemplates($query, null, $page, $per_page);
      $this->assertCount(1, $responses);
      $firstTemplate = $responses[0];
      $this->assertEquals('tpl_000000000000000002', $firstTemplate->getId());
    }

    /**
     * Test case for testAuthentication
     *
     * Test Authentication.
     *
     */
    public function testTestAuthentication()
    {
      $result = $this->docspring->testAuthentication();
      $this->assertEquals('success', $result->getStatus());
    }
}

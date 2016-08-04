<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Taskrouter\V1\Workspace;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class TaskTest extends HolodeckTestCase {
    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->taskrouter->v1->workspaces("WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                         ->tasks("WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'get',
            'https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        )));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "age": 25200,
                "assignment_status": "pending",
                "attributes": "{\\"body\\": \\"hello\\"}",
                "date_created": "2014-05-14T10:50:02Z",
                "date_updated": "2014-05-14T23:26:06Z",
                "priority": 0,
                "reason": "Test Reason",
                "sid": "WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "task_queue_sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "timeout": 60,
                "url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "workflow_sid": "WFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "workspace_sid": "WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));
        
        $actual = $this->twilio->taskrouter->v1->workspaces("WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                               ->tasks("WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();
        
        $this->assertNotNull($actual);
    }

    public function testUpdateRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->taskrouter->v1->workspaces("WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                         ->tasks("WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'post',
            'https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        )));
    }

    public function testUpdateResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "age": 25200,
                "assignment_status": "pending",
                "attributes": "{\\"body\\": \\"hello\\"}",
                "date_created": "2014-05-14T10:50:02Z",
                "date_updated": "2014-05-14T23:26:06Z",
                "priority": 0,
                "reason": "Test Reason",
                "sid": "WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "task_queue_sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "timeout": 60,
                "url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "workflow_sid": "WFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "workspace_sid": "WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));
        
        $actual = $this->twilio->taskrouter->v1->workspaces("WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                               ->tasks("WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->update();
        
        $this->assertNotNull($actual);
    }

    public function testDeleteRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->taskrouter->v1->workspaces("WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                         ->tasks("WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'delete',
            'https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        )));
    }

    public function testDeleteResponse() {
        $this->holodeck->mock(new Response(
            204,
            null
        ));
        
        $actual = $this->twilio->taskrouter->v1->workspaces("WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                               ->tasks("WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->delete();
        
        $this->assertTrue($actual);
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->taskrouter->v1->workspaces("WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                         ->tasks->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'get',
            'https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks'
        )));
    }

    public function testReadFullResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "first_page_url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks?PageSize=50&Page=0",
                    "key": "tasks",
                    "last_page_url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks?PageSize=50&Page=0",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks?PageSize=50&Page=0"
                },
                "tasks": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "age": 25200,
                        "assignment_status": "pending",
                        "attributes": "{\\"body\\": \\"hello\\"}",
                        "date_created": "2014-05-14T14:26:54Z",
                        "date_updated": "2014-05-15T16:03:42Z",
                        "priority": 0,
                        "reason": "Test Reason",
                        "sid": "WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "task_queue_sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "timeout": 60,
                        "url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "workflow_sid": "WFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "workspace_sid": "WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ]
            }
            '
        ));
        
        $actual = $this->twilio->taskrouter->v1->workspaces("WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                               ->tasks->read();
        
        $this->assertTrue(count($actual) > 0);
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "first_page_url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks?PageSize=50&Page=0",
                    "key": "tasks",
                    "last_page_url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks?PageSize=50&Page=0",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks?PageSize=50&Page=0"
                },
                "tasks": []
            }
            '
        ));
        
        $actual = $this->twilio->taskrouter->v1->workspaces("WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                               ->tasks->read();
        
        $this->assertNotNull($actual);
    }

    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->taskrouter->v1->workspaces("WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                         ->tasks->create("attributes", "WFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $values = array(
            'Attributes' => "attributes",
            'WorkflowSid' => "WFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
        );
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'post',
            'https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks',
            null,
            $values
        )));
    }

    public function testCreateResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "age": 25200,
                "assignment_status": "pending",
                "attributes": "{\\"body\\": \\"hello\\"}",
                "date_created": "2014-05-14T10:50:02Z",
                "date_updated": "2014-05-14T23:26:06Z",
                "priority": 0,
                "reason": "Test Reason",
                "sid": "WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "task_queue_sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "timeout": 60,
                "url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "workflow_sid": "WFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "workspace_sid": "WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));
        
        $actual = $this->twilio->taskrouter->v1->workspaces("WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                               ->tasks->create("attributes", "WFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
        
        $this->assertNotNull($actual);
    }
}
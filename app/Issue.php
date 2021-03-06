<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
   	protected $table = 'issues';
    protected $fillable = [

'requester',
'service_type_id',
'service_domain_id',
'requester_detail_issue',
'queued',
'service_begin_at',
'checkup_detail',
'service_end_estimated',
'service_end_at',
'issue_status_id',
'sumary_report',
'need_followup',
'service_by',
'requester_rate_service',

    ];
}

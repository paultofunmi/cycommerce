<?php
return array(
    'elements'=>array(
        'seo'=>array(
            'title'=>'SEO',
            'elements'=>array(
                array(
					'type'=>'text',
					'name'=>'mainTitle',
					'label'=>'Main Page Title',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
                array(
					'type'=>'text',
					'name'=>'mainKwrds',
					'label'=>'Default Keywords (Meta Tag)',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
                array(
					'type'=>'text',
					'name'=>'mainDescr',
					'label'=>'Default Description (Meta Tag)',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
            ),
        ),
		'mail'=>array(
            'title'=>'Mail',
            'elements'=>array(
                array(
					'type'=>'text',
					'name'=>'adminEmail',
					'label'=>'Admin Email',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'text',
					'name'=>'salesEmail',
					'label'=>'Sales Email',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
                array(
					'type'=>'text',
					'name'=>'fromReply',
					'label'=>'From Reply',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
                array(
					'type'=>'text',
					'name'=>'fromNoReply',
					'label'=>'From No Reply',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'text',
					'name'=>'server',
					'label'=>'Server',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'text',
					'name'=>'port',
					'label'=>'Port',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'text',
					'name'=>'user',
					'label'=>'User',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'password',
					'name'=>'password',
					'label'=>'Password',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'checkbox',
					'name'=>'ssl',
					'label'=>'SSL',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
            ),
        ),
		'site'=>array(
            'title'=>'Site',
            'elements'=>array(
                 array(
					'type'=>'text',
					'name'=>'storeID',
					'label'=>'Store ID',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),array(
					'type'=>'text',
					'name'=>'name',
					'label'=>'Site Name',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
                array(
					'type'=>'text',
					'name'=>'googleAPIKey',
					'label'=>'Google API Key',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
                array(
					'type'=>'text',
					'name'=>'numSearchResults',
					'label'=>'Number of search results on one page',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),array(
					'type'=>'text',
					'name'=>'siteRedirectUrl',
					'label'=>'Site Redirect Url',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),array(
					'type'=>'text',
					'name'=>'noreplyEmail',
					'label'=>'No Reply Email',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),array(
					'type'=>'text',
					'name'=>'salesEmail',
					'label'=>'Sales Email',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),array(
					'type'=>'text',
					'name'=>'sitePhone',
					'label'=>'Site Phone',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),array(
					'type'=>'text',
					'name'=>'currency',
					'label'=>'Currency',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
            ),
        ),
		'messages'=>array(
            'title'=>'Messages',
            'elements'=>array(
				array(
					'type'=>'text',
					'name'=>'newaccountsubject',
					'label'=>'New Account Subject',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
                array(
					'type'=>'textarea',
					'name'=>'newaccount',
					'label'=>'New Account',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'text',
					'name'=>'accountactivatedsubject',
					'label'=>'Account Activated Subject',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'textarea',
					'name'=>'accountactivated',
					'label'=>'Account Activated',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
                array(
					'type'=>'text',
					'name'=>'passwordresetsubject',
					'label'=>'Password Reset Subject',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
                array(
					'type'=>'textarea',
					'name'=>'passwordreset',
					'label'=>'Password Reset',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'text',
					'name'=>'newapplicationsubject',
					'label'=>'New Permit Application Subject',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'textarea',
					'name'=>'newapplication',
					'label'=>'New Permit Application',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'text',
					'name'=>'applicationreceivedsubject',
					'label'=>'Permit Application Recieved Subject',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'textarea',
					'name'=>'newapplicationreceived',
					'label'=>'Permit Application Recieved',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'textarea',
					'name'=>'permitapprovedsubject',
					'label'=>'Permit Approved Subject',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'textarea',
					'name'=>'permitapproved',
					'label'=>'Permit Approved',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'textarea',
					'name'=>'permitrejectedsubject',
					'label'=>'Permit Rejected Subject',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'textarea',
					'name'=>'permitrejected',
					'label'=>'Permit Rejected',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'textarea',
					'name'=>'renewalnoticesubject',
					'label'=>'Renewal Notice Subject',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'textarea',
					'name'=>'renewalnotice',
					'label'=>'Renewal Notice',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'textarea',
					'name'=>'paymentreceipt',
					'label'=>'Payment Receipt',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
				array(
					'type'=>'textarea',
					'name'=>'footer',
					'label'=>'Footer for all Messages',
					'value'=>'',
					'items'=>array(),
					'htmlOptions'=>array(),                   
                ),
            ),
        ),
    ),
);
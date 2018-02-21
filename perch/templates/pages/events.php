<?php 
  perch_layout('global/header', [
    'body-class' => 'events',
    'title' => '',
  ]); 

	echo '<div class="p-event-archive">';
	    

    	echo '<div class="p-page__header">';
    		echo '<h1 class="t-xl">Previous Events</h1>';
    	echo '</div>';

    	//	Only showing past events

    	perch_collection('Events', [
			'template'   => 'events/event_list.html',
			'sort'		 => 'date',
			'sort-order' => 'DESC',
			'filter' => 'date',
			'match'  => 'lt',
			'value'  => date('Y-m-d')
	    ]);
		    
	echo '</div>';

  perch_layout('global/footer', [
    'next-event' => 'true',
  ]);
 ?>
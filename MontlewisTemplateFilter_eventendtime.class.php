<?php

class MontlewisTemplateFilter_eventendtime extends PerchTemplateFilter
{
public function filterBeforeProcessing($value, $valueIsMarkup = false)
{
if (isset($this->content['program_duration'])) {
$duration = $this->content['program_duration'];
$duration_hour = floor($duration);
$duration_hour = floor($duration);
$duration_minute = round(60*($duration-$duration_hour));
$endTime = date('Y-m-d H:i:s',strtotime('+'.$duration_hour.' hours + '.$duration_minute.' minutes',strtotime($value)));
}
else {
$endTime = date('Y-m-d H:i:s',strtotime('+3 hour',strtotime($value)));
}

return $endTime;
}
}
PerchSystem::register_template_filter('eventendtime', 'MontlewisTemplateFilter_eventendtime');
// <perch:content id="eventDateTime" filter="eventendtime" format="l, F jS, Y g:ia">

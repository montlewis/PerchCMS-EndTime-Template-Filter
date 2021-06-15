# PerchCMS-EndTime-Template-Filter
This template filter will set an event end time as a date field. This is particularly handy in creating events where the event start time is set and then an event duration field is set. This template filter will return a date that is the start time plus the value of the duration. If there is no duration value set, it defaults to 3 hours.

## installation
- Download the latest version
- Place the `MontlewisTemplateFilter_eventendtime.class.php` in the folder `perch/addons/templates/filters/`
- Include the class in the file `perch/addons/templates/filters.php`
```php
include('filters/MontlewisTemplateFilter_eventendtime.class.php');
```

- Add a field to your template: `<perch:content id="program_duration" label="Duration" type="number" suppress size="s" help="Optional. ie: ‘Enter the length of the event in hours (ie 6.5 for an event that starts at 8:30 and goes to 3pm." step="0.25" >` (make sure you set the correct perch appspace):



## Configuration

### Enable template filters

You need to enable template filters in your config file `perch/config/config.php`:

```php
define('PERCH_TEMPLATE_FILTERS', true);
```


## Usage

```html
<perch:content id="eventDateTime" filter="eventendtime" format="l, F jS, Y g:ia">
```



## Notes

If there is a field on the template named `program_duration`, it will use the value in that field to compute the event ending time. Otherwise, it will default to 3 hours. you can change the default by editing this line of the template filter:

```
$endTime = date('Y-m-d H:i:s',strtotime('+3 hour',strtotime($value)));
```



---

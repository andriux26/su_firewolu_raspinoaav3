<?php

namespace Config;

class Config {
  # how many captures to show per page (pagination)
  const CAPTURES_PER_PAGE = 18;

  # base directory for sqlite database
  const DB_FILE = '/home/pi/raspberry-noaa-v2/db/panel.db';

  # see files in App/Lang directory for available translations
  const LANG = 'lt';

  # configure the date output format for the pass list - note that this must follow
  # a format that conforms to https://www.php.net/manual/en/datetime.format.php
  const PASSES_DATE_FORMAT = 'm/d/Y';

  # configure time output format on captures web page - note this must follow
  # a format that conforms to https://www.php.net/manual/en/datetime.format.php
  const DATETIME_FORMAT = 'm/d/Y H:i:s';

  # use https://www.php.net/manual/en/timezones.php
  const TIMEZONE = 'Europe/Vilnius';

  # location of images
  const IMAGE_PATH = '/srv/images';

  # location of thumbnails
  const THUMB_PATH = '/srv/images/thumb';

  # whether to enable satvis visualization
  const ENABLE_SATVIS = 'false';

  # whether to enable image video
  const ENABLE_ANIMATION = 'false';
  const ANIMATION_VIDEO_FILE = '/srv/videos/RollingAnimation.mp4';

  # lat and lon coordinates of base station
  const BASE_STATION_LAT = '55.4359';
  const BASE_STATION_LON = '24.21';

  # how many captures to list on admin page for management
  const ADMIN_CAPTURES_PER_PAGE = 100;

  # which enhancements to display for day/night
  const NOAA_DAY_ENHANCEMENTS = 'MCIR MCIR-precip MSA MSA-precip HVC-precip HVCT-precip HVC HVCT ZA therm CC HE HF MD BD MB JF JJ LC TA WV NO sea';
  const NOAA_NIGHT_ENHANCEMENTS = 'MCIR MCIR-precip HVCT ZA therm NO TA sea';

  # admin endpoint auth
  const LOCK_ADMIN = 'false';
  const ADMIN_USER = 'admin';
  const ADMIN_PASS = 'md165a';
}

?>

<?php
/* This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

function LL_DASHIF_Handle($request){
    $return_val = NULL;
    switch($request){
        case 'MPD':
            $return_val = low_latency_validate_mpd();
            break;
        case 'AdaptationSet':
            $return_val = low_latency_validate_cross();
            break;
        default:
            break;
    }
    
    return $return_val;
}
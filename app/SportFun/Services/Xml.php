<?php namespace SportFun\Services;


class Xml {


    public static function readXml($ext, $file)
    {
        $points= [];

        if($ext === "tcx"){
          $xml = new \SimpleXMLElement($file, Null, True);
        
          $distance = $xml->Activities->Activity->Lap->DistanceMeters;

          foreach($xml->Activities->Activity->Lap->Track->Trackpoint as $child) {  
            array_push($points, [$child->Position->LatitudeDegrees, $child->Position->LongitudeDegrees]);
          }
        }

        if($ext === "gpx"){
            $xml = new \SimpleXMLElement($file, Null, True);

            foreach($xml->trk->trkseg->trkpt as $child) {  
                array_push($points, [$child['lat'], $child['lon']]);
            }
        }

        return array(
            'coords' => $points,
            'dist' => $distance );
    }

}
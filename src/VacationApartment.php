<?php

use VacationApartments\Api\Listing;
use VacationApartments\Utility\Utility;

class VacationApartment {

    /**
     * @return Listing
     */
    function getListing() {

        $listing = new Listing();
        $listing = $listing->get(Utility::getConfig("homepage", "listingId"));

        return $listing;
    }
}

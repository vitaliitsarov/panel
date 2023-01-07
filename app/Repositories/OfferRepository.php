<?php

namespace App\Repositories;

use App\Models\Offer;
use App\Repositories\Interfaces\OfferRepositoryInterface;

class OfferRepository implements OfferRepositoryInterface
{
    public function all()
    {
        return Offer::all();
    }
}
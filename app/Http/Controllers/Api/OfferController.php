<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Interfaces\OfferRepositoryInterface;

class OfferController extends Controller
{
    private $offerRepository;

	public function __construct(OfferRepositoryInterface $offerRepository)
    {
        $this->offerRepository = $offerRepository;
    }

	public function index()
    {
        $offers = $this->offerRepository->all();

		return response()->json($offers);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\JsonResponse;

class ApartmentController extends Controller {
    public function index(): JsonResponse {
        $apartments = Apartment::with(['user', 'addresses', 'services', 'images', 'views'])->get();

        return response()->json($apartments);
    }

    public function show($id): JsonResponse {
        $apartment = Apartment::with(['user', 'addresses', 'services', 'images', 'views'])->find($id);

        if (!$apartment) {
            return response()->json(['message' => 'Apartment not found'], 404);
        }

        return response()->json($apartment);
    }

    public function getAllOrderedByAvailability() {
        $apartments = Apartment::with(['user', 'addresses', 'services', 'images', 'views'])
            ->orderBy('is_available', 'desc')
            ->get();

        return response()->json($apartments);
    }

    public function getAllOrderedBySponsorship() {
        $apartments = Apartment::with(['user', 'addresses', 'services', 'images', 'views'])
            ->orderByDesc('is_sponsored')
            ->get();

        return response()->json($apartments);
    }

    public function getImages($id): JsonResponse {
        $images = Apartment::find($id)->images;

        if (!$images) {
            return response()->json(['message' => 'Apartment images not found'], 404);
        }

        return response()->json($images);
    }

    public function getServices($id): JsonResponse {
        $services = Apartment::find($id)->services;

        if (!$services) {
            return response()->json(['message' => 'Apartment services not found'], 404);
        }

        return response()->json($services);
    }

    public function getViews($id): JsonResponse {
        $views = Apartment::find($id)->views;

        if (!$views) {
            return response()->json(['message' => 'Apartment views not found'], 404);
        }

        return response()->json($views);
    }

    public function getMessages($id) {
        $apartment = Apartment::with('messages')->find($id);

        if (!$apartment) {
            return response()->json(['message' => 'Apartment not found'], 404);
        }

        $messages = $apartment->messages;

        return response()->json($messages);
    }
}

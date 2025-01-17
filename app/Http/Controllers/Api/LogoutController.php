<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try {
            // Check if token is valid before invalidating
            $token = JWTAuth::getToken();

            if (!$token) {
                return response()->json([
                    'success' => false,
                    'message' => 'Token tidak ditemukan!',
                ], 400);
            }

            $user = JWTAuth::authenticate($token);

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Token tidak valid!',
                ], 401);
            }

            // Invalidate the token
            JWTAuth::invalidate($token);

            return response()->json([
                'success' => true,
                'message' => 'Logout Berhasil!',
            ]);
        } catch (TokenExpiredException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Token telah kadaluarsa!',
            ], 401);
        } catch (TokenInvalidException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Token tidak valid!',
            ], 401);
        } catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memproses logout.',
            ], 500);
        }
    }
}

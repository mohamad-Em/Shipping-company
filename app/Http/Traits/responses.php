<?php
namespace App\Http\Traits;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use PhpParser\Builder\Trait_;
trait responses
{
    function sendResponse($result,$message)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message
        ];
        return response()->json($response , 200);
    }
    function sendError($error,$errorMessage = [] , $code = 404)
    {
        $response = [
            'success' => false,
            'data' => $error,
        ];
        if(!empty($errorMessage))
        {
            $response['data'] = $errorMessage;
        }
        return response()->json($response , $code);
    }
}
?>

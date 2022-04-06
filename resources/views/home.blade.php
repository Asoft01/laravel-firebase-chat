@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
            // import { initializeApp } from "firebase/app";
            // import { getMessaging } from "firebase/messaging";
        const messaging = getMessaging();
        // Add the public key generated from the console here.
        messaging.getToken({vapidKey: "AAAAIDpon_E:APA91bHY8KiInn3Xwx9Nvzp_3fjrCfsyQwMonlS6m7M2PCmCVBiTpOViLKa2HIWiRm3fX5NUClu7m0KiO9GAW9IAAlDapFgd16gH6hdWhZEkzzLmXelxSty6X8I98FUgfGlwNhWTsRRU"});

        axios.post('/api/save-token', {
            test: 'test'
        }).then(res=> {
            console.log(res);
        })
    </script>
@endsection
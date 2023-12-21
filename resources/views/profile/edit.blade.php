@extends('partials.layout')

@section('content')
<div class="container mx-auto">
    <div class="card bg-base-200 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Edit profile</h2>
            <p>{{session('status')}}</p>
            <form action="{{route('profile.update')}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input type="text" placeholder="Name" class="input input-bordered w-full" name="name" value="{{old('name') ?? $user->name}}" />
                    @error('name')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                    @enderror
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="email" placeholder="Email" class="input input-bordered w-full" name="email" value="{{old('email') ?? $user->email}}" />
                    @error('email')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                    @enderror
                </div>
                    
                <input type="submit" class="btn btn-primary my-3" value="Update">
            </form>
        </div>
    </div>
    <div class="card bg-base-200 shadow-xl mt-2">
        <div class="card-body">
            <h2 class="card-title">Delete profile</h2>
            <form action="{{route('profile.destroy')}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="form-control w-full">
                    <ul>
                        @foreach ($errors->userDeletion->all() as $error)
                            <li class="text-error">{{ $error }}</li>
                        @endforeach
                    </ul>

                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" placeholder="Password" class="input input-bordered w-full" name="password" />
                </div>
                
                <input type="submit" class="btn join-item btn-error my-3" value="Delete my account" />
            </form>
        </div>
    </div>
</div>
@endsection

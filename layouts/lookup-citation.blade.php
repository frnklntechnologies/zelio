{{-- O ficheiro herda o layout 'default' do seu tema --}}
@extends(Theme::layout('default'))

{{-- O conteúdo vai para a secção 'content' --}}
@section('content')
    <div class="container my-5"> {{-- Adapte estas classes ao seu tema --}}
        <div class="row justify-content-center">
            <div class="col-lg-8"> {{-- Adapte estas classes ao seu tema --}}
                
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">{{ trans('plugins/citations::citations.lookup_title') }}</h3>
                    </div>
                    <div class="card-body p-4">
                        <p class="text-center">{{ trans('plugins/citations::citations.lookup_description') }}</p>

                        <form action="{{ route('public.citations.lookup.post') }}" method="POST" class="mt-3">
                            
                            @csrf 

                            <div class="mb-3">
                                <label for="token" class="form-label">
                                    <strong>{{ trans('plugins/citations::citations.token') }}</strong>
                                </label>
                                <input type="text" 
                                       name="token" 
                                       id="token" 
                                       class="form-control form-control-lg" 
                                       placeholder="Ex: ABCDEFGHIJKLMNOP" 
                                       required 
                                       minlength="16" 
                                       maxlength="16">
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <p class="mb-0">{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">{{ trans('plugins/citations::citations.search') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'FAQ')

@section('content')
<div class="faqs">
    <banner class="faqs-banner">
        <div class="image">
            <img src="{{ asset('assets/frontend/img/question-mark.svg') }}" alt="faqs" class="img-fluid" />
        </div>
    </banner>
    <div class="faqs-body pb-5">
        <div class="container content">
            <h1>Frequently Asked Questions</h1>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How do I report a fraud
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>If you think you'hv been the victim of sny scam, feel you have been tricked into giving your secturing details or notice anything suspecious on your account, please call us as soon as possible.</p>
                            <p class="mb-1">Call: <strong>03 456 100 100</strong> (lines are open 24/7, 365 days a year)</p>
                            <p class="mb-1">Text Phone: <strong>03 456 100 147</strong></p>
                            <p class="mb-1">Calling from abroad: <strong>+44 113 234 5678</strong></p>
                            <p class="mb-1">Text relay: <strong>+44 151 494 1260</strong></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam dolores labore
                            dicta dolore repudiandae harum?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, itaque ea
                                facere voluptates eum in? Nihil recusandae necessitatibus quos eligendi nemo
                                quod quaerat deleniti atque! Quam repellendus ipsum eum molestias, maxime
                                eaque nesciunt, sint earum doloremque necessitatibus totam, consequuntur
                                possimus.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

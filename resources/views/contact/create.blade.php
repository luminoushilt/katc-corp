@extends('layouts.app')

@section('content')
	<div class="contact">

    <section class="hero is-large">
      <div class="hero-body hero-img">
        <div class="container has-text-centered">
          <h1
            class="white-title title has-text-shadow is-size-0 is-size-2-touch"
          >
            Contact
          </h1>
        </div>
      </div>
    </section>
    <section class="hero is-medium">
      <div class="hero-body">
        <div class="container">
          <div class="columns is-multiline">
            <div class="column is-half">
              <form class="control" action="/contact" method="post">
                <div class="field">
                  <label class="label"
                    >Name <span class="has-text-danger">*</span></label
                  >
                  <div class="control">
                    <input
                      name="name"
                      class="input"
                      type="text"
                      placeholder="e.g. John Doe"
                      value="{{ old('name') }}"
                      required
                    />
                    {{-- <div>{{ $erros->first('name') }}</div> --}}
                    @error('name')
                      <div class"">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="field">
                  <label class="label"
                    >Email <span class="has-text-danger">*</span></label
                  >
                  <div class="control has-icons-left has-icons-right">
                    <input
                      name="email"
                      class="input"
                      type="email"
                      placeholder="e.g. john.doe@gmail.com"
                      value="{{ old('email') }}"
                      required
                    /><span class="icon is-small is-left"
                      ><i class="fas fa-envelope"></i
                    ></span>
                    {{-- <div>{{ $erros->first('email') }}</div> --}}
                    @error('email')
                      <div class"">{{ $message }}</div>
                    @enderror

                  </div>
                </div>
                <div class="field">
                  <label class="label">Message</label>
                  <div class="control">
                    <textarea
                      id="message"
                      name="message"
                      class="textarea"
                      placeholder="Quote Inquiries"
                    ></textarea>
                    {{-- <div>{{ $erros->first('message') }}</div> --}}
                    @error('message')
                      <div class"">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                @csrf

                <div class="field is-grouped">
                  <div class="control">
                    <button class="button is-link">Submit</button>
                  </div>
                  <div class="control">
                    <button class="button is-text">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="column is-half">
              <div class="contact-map" id="my-map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1376778.1063473541!2d-80.22681847129898!3d25.88886386190495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a698bf50e1f7%3A0x3ba9f9e721e3bcfa!2sMiramar%2C+FL!5e0!3m2!1sen!2sus!4v1534958588765"
                  aria-hidden="true"
                  width="100%"
                  height="100%"
                  frameborder="0"
                  style="border: 0;"
                  allowfullscreen
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @if (session('message'))
      <div class="modal is-active">
        <div class="modal-background"></div>
        <div class="modal-content">
          <div class="box has-text-centered">
            <p class="is-size-1 is-size-3-touch has-text-success">{{ session('message') }}</p>
          </div>
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
      </div>
    @endif
    
	</div>
@endsection
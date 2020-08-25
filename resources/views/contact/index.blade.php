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
              <form class="control" action="/Contact/.index.html" method="post">
                <div class="field">
                  <label class="label"
                    >Name <span class="has-text-danger">*</span></label
                  >
                  <div class="control">
                    <input
                      class="input"
                      type="text"
                      placeholder="e.g. John Doe"
                      required
                    />
                  </div>
                </div>
                <div class="field">
                  <label class="label"
                    >Email <span class="has-text-danger">*</span></label
                  >
                  <div class="control has-icons-left has-icons-right">
                    <input
                      class="input"
                      type="email"
                      placeholder="e.g. john.doe@gmail.com"
                      required
                    /><span class="icon is-small is-left"
                      ><i class="fas fa-envelope"></i
                    ></span>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Message</label>
                  <div class="control">
                    <textarea
                      class="textarea"
                      placeholder="Quote Inquiries"
                    ></textarea>
                  </div>
                </div>
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
	</div>
@endsection
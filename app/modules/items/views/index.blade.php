@extends('layouts/desktop')
@section('content')

  <div class="welcome_footer" my-custom-background="#f8f8f8">
   
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="welcome_footer_card_wrap row">
              <div class="welcome_footer_card welcome_footer_card_messaging"></div>
              <h4 my-i18n="welcome_fast_messaging_header"></h4>
              <div class="welcome_footer_card_lead" my-i18n="welcome_fast_messaging_text"></div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4">
            <div class="welcome_footer_card_wrap">
              <div class="welcome_footer_card welcome_footer_card_filesharing"></div>
              <h4 my-i18n="welcome_easy_sharing_header"></h4>
              <div class="welcome_footer_card_lead" my-i18n="welcome_easy_sharing_text"></div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4">
            <div class="welcome_footer_card_wrap">
              <div class="welcome_footer_card welcome_footer_card_powerful"></div>
              <h4 my-i18n="welcome_powerful_tools_header"></h4>
              <div class="welcome_footer_card_lead" my-i18n="welcome_powerful_tools_text_md"></div>
            </div>
          </div>
      </div>
    </div>

  </div>

@stop

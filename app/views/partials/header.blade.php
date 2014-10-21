
<div class="tg_page_head">
  <div class="navbar navbar-static-top  navbar-inverse" role="navigation" ng-class="{navbar_peer_not_selected: !curDialog.peer, navbar_offline: offline, navbar_history_select: historyState.selectActions}">
    <div class="container">

      <div class="navbar-header">
        <a class="navbar-brand" href="#/im"><span class="tg_head_logo"></span></a>
      </div>

      <div class="navbar-menu" >
         <ul ng-switch-default="" class="nav navbar-nav navbar-right ng-scope">
          <li lass="ng-scope"><input class="form-control im_dialogs_search_field no_outline " type="search" placeholder="Search">
</li>
         <li  class="ng-scope"><a href="" ng-click="openContacts()" my-i18n="head_contacts">Contacts</a></li><!-- end ngIf: isLoggedIn && !isEmpty.contacts -->
         <li ><a href="" ng-click="openSettings()" my-i18n="head_settings">Settings</a></li><!-- end ngIf: isLoggedIn -->
         <li ><a href="" ng-click="logOut()" my-i18n="head_log_out">Log Out</a></li><!-- end ngIf: isLoggedIn -->
          
        </ul>

      </div>

    </div>
  </div>
</div>
  
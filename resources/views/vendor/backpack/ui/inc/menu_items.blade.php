{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<br>
<x-backpack::menu-item title="Organisations" icon="la la-building" :link="backpack_url('organisations')" />
<x-backpack::menu-item title="Causes" icon="la la-heart" :link="backpack_url('causes')" /> <br>
<x-backpack::menu-item title="Catégories" icon="la la-list" :link="backpack_url('categories')" />

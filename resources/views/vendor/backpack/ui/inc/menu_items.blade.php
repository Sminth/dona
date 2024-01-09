{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-title">Gestion des dons</li>
<x-backpack::menu-item title="Nos Causes" icon="la la-heart" :link="backpack_url('causes')" />
<x-backpack::menu-item title="Les Dons" icon="la la-money" :link="backpack_url('dons')" />

<li class="nav-title">Configuration de Base</li>

<x-backpack::menu-item title="Organisations" icon="la la-building" :link="backpack_url('organisations')" />
<x-backpack::menu-item title="Catégories" icon="la la-list" :link="backpack_url('categories')" />

// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

import slider from './components/slider';
import hero from './components/hero';
import house from './components/house';
import rotator from './components/rotator';
import hamburger from './components/hamburger';
import popup from './components/popup';
import ExtraMenu from './components/extra-menu';
import search from './components/search';
import active from './components/active';
import header from './components/header';
import locationmap from './components/location-map';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  slider.init();
  hero.init();
  rotator.init();
  hamburger.init();
  popup.init();
  ExtraMenu.init();
  search.init();
  house.init();
  active.init();
  header.init();
  locationmap.init();
});

// setTimeout(()=> {
//   slider.resize();
// }, 1000)

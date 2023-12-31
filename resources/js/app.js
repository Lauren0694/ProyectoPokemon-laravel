

import { library } from '@fortawesome/fontawesome-svg-core';
import { faStar  } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

library.add(faStar );
import { createApp } from 'vue';
import App from './App.vue';
import router from './router'

createApp(App, {
    hoistStatic: false
  })
  .component('font-awesome-icon', FontAwesomeIcon)
  .use(router)
  .mount('#app');
 

import './bootstrap';

import { createApp } from 'vue';

const app = createApp({});

import FollowButton from './components/FollowButton.vue';

app.component('follow-button', FollowButton);

app.mount('#app');

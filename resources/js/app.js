

import './bootstrap';
window.Vue=require('vue').default;
// import { createApp } from "vue";
// import App from "./components/message.vue";
// createApp(App).mount("#app");


// const app = createApp({});

// import ExampleComponent from './components/ExampleComponent.vue';
// app.component('example-component', ExampleComponent);

// import VideoChat from './components/VideoChat.vue'

// Vue.component('video-chat', VideoChat)
//  Streaming Components
// Vue.component("broadcaster", require("./components/Broadcaster.vue").default);
//  Vue.component("viewer", require("./components/Viewer.vue").default);
// // Vue.component("message", require("./components/message.vue").default);
// Vue.component('video-chat', require('./components/VideoChat.vue').default);

Vue.component('message', require('./components/message.vue').default);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

//  app.mount('#app');
 const app =new Vue({
   el: "#app",
   data: {
    message: ' ',
        chat:{
            message:[ ]
        }
   },
   methods: {
    send(){
        if(this.message.length !=0){
            this.chat.message.push(this.message);
            this.message='';
        }
        
    }
   }
});

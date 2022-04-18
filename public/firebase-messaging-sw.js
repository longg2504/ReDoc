importScripts("https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js");
importScripts("https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js");
// For an optimal experience using Cloud Messaging, also add the Firebase SDK for Analytics.
importScripts("https://www.gstatic.com/firebasejs/8.10.0/firebase-analytics.js");

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
firebase.initializeApp({
    apiKey: "AIzaSyBU-vEFegjEhKZaIuES1ljhm6iVvGWGssg",
    authDomain: "bigviet-91943.firebaseapp.com",
    projectId: "bigviet-91943",
    storageBucket: "bigviet-91943.appspot.com",
    messagingSenderId: "278111539332",
    appId: "1:278111539332:web:86bcdcb53bd19cd010f2d1",
    measurementId: "G-BX89EY0J5V"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

//setBackgroundMessageHandler
messaging.onBackgroundMessage(function(payload) {
    console.log(
        "[firebase-messaging-sw.js] Received background message ",
        payload,
    );
    // Customize notification here
    const notificationTitle = "Background Message Title";
    const notificationOptions = {
        body: "Background Message body here.",
        icon: "http://bepadmin.bigviet.vn/dist/images/logo.svg",
    };

    return self.registration.showNotification(
        notificationTitle,
        notificationOptions,
    );
});

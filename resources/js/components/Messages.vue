<template>
  <ul class="chat">
    <!-- Data tersebut berupad array yang berisi pesan -->
    <!-- Kita looping data tersebut untuk menampilkan semua isi pesan dan pengirim -->
    <li class=" clearfix" v-for="(message, index) in messages" :key="message + '-' + index">
      <div class="chat-body clearfix">
        <div class="header">
          <strong class="primary-font">{{ message.user.name }}</strong>
        </div>
      </div>
      <p>{{message.message}}</p>
    </li>
  </ul>
</template>

<script>
export default {
  // Tag :message di code sebelumnya  ? code tersebut sebagian dari props
  // gunanya untuk mengirimkan data ke component yang dituju
  // Dalam hal ini kita mengirimkan data dengan props message ke component messages.vue
  props: ["messages"]
};
</script>

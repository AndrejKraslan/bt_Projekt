<template>
  <div>
    <p>{{ info }}</p>
    <button @click="fetchInfo">Fetch Info</button>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import axios from 'axios';

const info = ref('Click the button to fetch info');

const fetchInfo = async () => {
  try {
    const response = await axios.get('http://localhost/TestProjektu/Back_END_TestProjekt/public/api/info');
    if (response.data.message) {
      info.value = response.data.message;
    } else {
      info.value = 'No data received from the server';
    }
  } catch (error) {
    if (error.response) {
      // The request was made and the server responded with a status code
      // that falls out of the range of 2xx
      console.error(`Error: ${error.response.status}`);
      console.error(`Message: ${error.response.data}`);
    } else if (error.request) {
      // The request was made but no response was received
      console.error('Error: No response received from the server');
      console.error('Error details:', error.message);
    } else {
      // Something happened in setting up the request that triggered an Error
      console.error('Error', error.message);
    }
    info.value = 'An error occurred while fetching the info';
  }
};


</script>
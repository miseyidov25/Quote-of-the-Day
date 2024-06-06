<template>
  <div>
    <form @submit.prevent="submitQuote">
      <input v-model="text" placeholder="Quote" required />
      <input v-model="author" placeholder="Author" required />
      <button type="submit">Add Quote</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      text: '',
      author: ''
    };
  },
  methods: {
    async submitQuote() {
      if (!this.text || !this.author) {
        alert('Both text and author fields are required.');
        return;
      }
      try {
        await axios.post('http://127.0.0.1:8000/make-quotes', {
          text: this.text,
          author: this.author
        });
        this.text = '';
        this.author = '';
        this.$emit('new-quote');
      } catch (error) {
        console.error('Error adding quote:', error);
        alert('Failed to add quote. Please try again later.');
      }
    }
  }
};
</script>

<style>
button {
  margin-top: 10px;
  padding: 5px 10px;
  border: none;
  border-radius: 5px;
  background-color: #ff4d4d;
  color: green;
  cursor: pointer;
}

button:hover {
  background-color: yellow;
}

.filter-buttons {
  margin-bottom: 20px;
}

.filter-buttons button {
  margin-right: 10px; 
}
</style>
<template>
  <div class="quote-list">
    <h2>All Quotes</h2>
    <div class="filter-buttons">
      <button @click="filterByDate(null)">Date</button>
      <button @click="filterByAuthor(null)">by Author</button>
      <button @click="filterByQuote(null)">by Quote</button>

    </div>
    <ul>
      <li v-for="quote in filteredQuotes" :key="quote.id" class="quote">
        <p class="quote-text">"{{ quote.text }}"</p>
        <p class="quote-author">- {{ quote.author }}</p>
        <button @click="deleteQuote(quote.id)">Delete</button>
      </li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: ['quotes'],
  data() {
    return {
      filterAuthor: null,
      filterByDate: null,
      filterByQuote: null,
    };
  },
  computed: {
    uniqueAuthors() {
      return [...new Set(this.quotes.map(quote => quote.author))];
    },
    filteredQuotes() {
      if (this.filterAuthor) {
        return this.quotes.filter(quote => quote.author === this.filterAuthor);
      } else {
        return this.quotes;
      }
    }
  },
  methods: {
    async deleteQuote(id) {
      try {
        await axios.delete(`http://127.0.0.1:8000/make-quotes/${id}`);
        this.$emit('quote-deleted');
      } catch (error) {
        console.error('Error deleting quote:', error);
        alert('Failed to delete quote. Please try again later.');
      }
    },
    filterByAuthor(author) {
      this.filterAuthor = author;
    }
  }
};

</script>

<style scoped>
.quote-list {
  width: 80%;
  max-width: 600px;
  margin: 0 auto;
}

.quote {
  margin: 20px 0;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: #f9f9f9;
}

.quote-text {
  font-size: 18px;
  font-weight: 400;
  line-height: 1.5;
  color: #333;
  margin: 0;
}

.quote-author {
  font-size: 14px;
  font-weight: 700;
  color: #777;
  margin: 10px 0 0;
}

button {
  margin-top: 10px;
  padding: 5px 10px;
  border: none;
  border-radius: 5px;
  background-color: #ff4d4d;
  color: white;
  cursor: pointer;
}

button:hover {
  background-color: #ff1a1a;
}

.filter-buttons {
  margin-bottom: 20px;
}

.filter-buttons button {
  margin-right: 10px; 
}
</style>
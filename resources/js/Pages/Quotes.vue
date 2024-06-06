<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import AddQuote from '@/Pages/Quotes/AddQuote.vue';
import QuoteList from '@/Pages/Quotes/QuoteList.vue';

export default {
  name: 'App',
  components: {
    AppLayout,
    AddQuote,
    QuoteList,
  },
  data() {
    return {
      quotes: []
    };
  },
  methods: {
    async fetchQuotes() {
      const response = await axios.get('http://127.0.0.1:8000/quotes');
      this.quotes = response.data;
    }
  },
  mounted() {
    this.fetchQuotes();
  }
};
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Quotes
            </h2>
        </template>
    <div class="quote-list">
        <div class="quote">
            <q class="quote-text">The only limit to our realization of tomorrow will be our doubts of today.</q>
            <p class="quote-author">— Franklin D. Roosevelt</p>
        </div>
        <div class="quote">
            <q class="quote-text">Success is not final, failure is not fatal: It is the courage to continue that counts.</q>
            <p class="quote-author">— Winston Churchill</p>
        </div>
        <div class="quote">
            <q class="quote-text">The best way to predict the future is to create it.</q>
            <p class="quote-author">— Peter Drucker</p>
        </div>
        <div class="quote">
            <q class="quote-text">The only thing we have to fear is fear itself.</q>
            <p class="quote-author">— Franklin D. Roosevelt</p>
        </div>
        <div class="quote">
            <q class="quote-text">In the middle of every difficulty lies opportunity.</q>
            <p class="quote-author">— Albert Einstein</p>
        </div>
    </div>
        
    </AppLayout>
</template>
<style>
h2 {
  display: flex;
  flex-direction: column;
  text-align: center;
  font-size: 24px;
} 
</style>
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
</style>
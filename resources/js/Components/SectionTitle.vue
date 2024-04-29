<template>
    <div class="section-title">
      <h2><slot name="title" /></h2>
      <p><slot name="description" /></p>
    </div>
  </template>
  
  <script>
  export default {
    name: 'SectionTitle'
  }
  </script>
  
  <style scoped>
  .section-title {
    background: purple;
    color: white;
    padding: 10px;
    text-align: center;
    
  }
  </style>
  
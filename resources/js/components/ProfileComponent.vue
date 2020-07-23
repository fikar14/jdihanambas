<template>
  <section>
    <b-collapse
      class="card"
      v-for="(collapse, index) of collapses"
      :key="index"
      :open="isOpen == index"
      @open="isOpen = index"
    >
      <div slot="trigger" slot-scope="props" class="card-header" role="button">
        <p class="card-header-title">{{ collapse.title }}</p>
        <a class="card-header-icon">
          <b-icon :icon="props.open ? 'menu-down' : 'menu-up'"></b-icon>
        </a>
      </div>
      <div class="card-content">
        <div class="content">{{ collapse.text }}</div>
      </div>
    </b-collapse>
  </section>
</template>

<script>
export default {
  data() {
    return {
      isOpen: 0,
      collapses: [
        {
          title: "Visi",
          text: "Text 1"
        },
        {
          title: "Misi",
          text: "Text 2"
        },
        {
          title: "Tugas Pokok",
          text: "Text 3"
        },
        {
          title: "Tujuan",
          text: "Text 4"
        },
        {
          title: "Fungsi",
          text: "Text 5"
        },
        {
          title: "Struktur Organisasi",
          text: "Text 6"
        },
        {
          title: "SOP",
          text: "Text 7"
        }
      ]
    };
  }
};
</script>

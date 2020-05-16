<template>
  <!-- ---- -->
  <div class="row">
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body card-transparent">
          <h4 class="card-title">Tambah Berkas</h4>
          <!-- <p class="card-description">* Boleh dikosongkan</p> -->
          <form class="forms-sample">
            <div class="form-group">
              <label for="name">Nama</label>
              <input
                type="text"
                class="form-control"
                v-model="name"
                id="name"
                placeholder="Nama urusan"
              />
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <input
                type="text"
                class="form-control"
                v-model="description"
                id="exampleInputEmail1"
                placeholder="Keterangan tentang jurusan"
              />
            </div>

            <button type="submit" class="btn btn-rounded btn-primary mr-2">Simpan</button>
            <button class="btn btn-rounded btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body card-transparent">
          <h4 class="card-title">Berkas Persyaratan</h4>

          <!-- batasan pengujian -->
          <div
            class="card m-1 dept-tumbnail float-left"
            v-for="(department, index) in departments"
            :key="index"
          >
            <div class="card-body">
              <h4 class="card-title">Icon size</h4>
              <p class="card-description">
                Add class
                <code>.icon-lg</code>,
                <code>.icon-md</code>,
                <code>.icon-sm</code>
              </p>
              <div class="row">
                <div class="col-md-4 d-flex align-items-center">
                  <div class="d-flex flex-row align-items-center">
                    <i class="mdi mdi-compass-outline icon-lg text-warning"></i>
                    <p class="mb-0 ml-1">Icon-lg</p>
                  </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                  <div class="d-flex flex-row align-items-center">
                    <i class="mdi mdi-compass-outline icon-md text-success"></i>
                    <p class="mb-0 ml-1">Icon-md</p>
                  </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                  <div class="d-flex flex-row align-items-center">
                    <i class="mdi mdi-compass-outline icon-sm text-danger"></i>
                    <p class="mb-0 ml-1">Icon-sm</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- batasan -->
        </div>
      </div>
    </div>
  </div>
</template>Í

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  data() {
    return {
      name: "",
      departments: [{ id: 0 }, { id: 1 }, { id: 2 }, { id: 3 }]
    };
  },
  computed: {
    ...mapGetters({
      departments: "department/departments"
    })
  }
  // created(){
  //   this.name = "aku"
  // }
};
</script>
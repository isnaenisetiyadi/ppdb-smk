<template>
  <div class="row">
    <div class="col-md-6 mx-auto grid-margin stretch-card">
      <div class="card card-transparent">
        <div class="card-body card-transparent">
          <h4 class="card-title">Profil Sekolah</h4>
          <form class="forms-sample">
           
            <div class="form-group">
              <label for="name">Nama Sekolah</label>
              <input
                type="text"
                class="form-control"
                placeholder="SMK N 1 Mepanga"
                aria-label="SMK N 1 Mepanga"
                v-model="name"
              />
            </div>
            <div class="form-group">
              <label for="address">Alamat</label>
              <input
                type="text"
                class="form-control"
                placeholder="Jl. Nusantara No.16 Kayuagung"
                aria-label="Jl. Nusantara No.16 Kayuagung"
                v-model="address"
              />
            </div>

            <div class="form-group">
              <label for="province">Provinsi</label>
              <select class="form-control" v-model="province">
                <option>Sulawesi Tengah</option>
                <option>Sulawesi Utara</option>
              </select>
            </div>
            <div class="form-group">
              <label for="city">Kabupaten/Kota</label>
              <select class="form-control" v-model="city">
                <option>Parigi Moutong</option>
                <option>Donggala</option>
              </select>
            </div>
            <div class="form-group">
              <label for="brand-logo">Brand sekolah</label>
              <input type="file" class="form-control" id="brand-logo" />
            </div>
            <div class="form-group">
              <label for="brang-logo-mini">Logo Sekolah</label>
              <input type="file" class="form-control" id="brand-logo-mini" />
            </div>
             <button type="submit" class="btn btn-rounded btn-primary mr-2">Simpan</button>
            <button class="btn btn-rounded btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  data() {
    return {
      name: "",
      departments: [{ id: 0 }, { id: 1 }, { id: 2 }, { id: 3 }, { id: 4 }],
      files: [
        { id: 0, text: "SKL" },
        { id: 1, text: "Kartu Keluarga" },
        { id: 2, text: "Akta Kelahiran" },
        { id: 3, text: "Pas Foto" }
      ]
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
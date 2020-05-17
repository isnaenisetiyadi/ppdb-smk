<template>
  <div class="row">
    <div class="col-md-6 mx-auto grid-margin stretch-card">
      <div class="card">
        <div class="card-body card-transparent">
          <h4 class="card-title">Pengumuman</h4>
          <form class="forms-sample">
            <div class="form-group">
              <label for>Masukkan nomor pendaftaran</label>
              <br />
              <div class="input-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Nomor Pendaftaran"
                  aria-label="Nomor Pendaftaran"
                />
                <div class="input-group-append">
                  <button class="btn btn-sm btn-primary" type="button">Lihat Pengumuman</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-12 mx-auto grid-margin stretch-card">
      <div class="card">
        <!-- <div class="card-header">
          <div class="card-header-title">Hasil kelulusan anda adalah</div>
        </div> -->
        <div class="card-body card-transparent">
            <h4 class="card-title">Hasil kelulusan anda adalah</h4>
          <h1 class="card-title text-center text-white" style="text-shadow: 0 0 4px #FF0000, 0 0 6px #0000FF;">Selamat</h1>
          <h2 class="text-success text-center">Anda LULUS</h2>
        </div>
        <div class="card-footer">
            <router-link class="btn btn-rounded btn-primary" to="/heregister">
                Daftar Ulang
            </router-link>
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
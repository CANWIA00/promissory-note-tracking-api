
<div class="container">
  <li>
    <form class="row g-3 needs-validation" action="{{ route('create') }}" method="POST" novalidate>
      {{ csrf_field() }}
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Müşteri Adı</label>
          <input name="musteri" type="text" class="form-control" id="validationCustom01" placeholder="Müşteri Adı" required >
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Vade Sayısı</label>
          <div class="input-group has-validation">
            <input name="vade_sayisi" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Vade Sayısı" required>
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom03" class="form-label">Ödenen Vade</label>
          <input name="odenen_vadeler" type="text" class="form-control" id="validationCustom03" placeholder="Ödenen Vade" required>
        </div>
        <div class="col-md-3">
          <label for="validationCustom03" class="form-label">Kalan Vade</label>
          <input name="kalan_vadeler" type="text" class="form-control" id="validationCustom03" placeholder="Kalan Vade" required>
        </div>
        <div class="col-md-3">
          <label for="validationCustom04" class="form-label">Filitreleme</label>
          <select name="filitreleme" class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Senet Türü</option>
            <option value="Açık Senet">Açık Senet</option>
            <option value="Kapalı Senet">Kapalı Senet</option>
          </select>
          <div class="invalid-feedback">
            Lütfen vade türünü belirleyiniz.
          </div>
        </div>
      
        <div class="col-12">
          <button class="btn btn-primary" type="submit" >Kaydet</button>
        </div>
      </form>
</li>
</div>




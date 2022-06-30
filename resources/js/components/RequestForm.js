import React, { Component} from "react";
import ReactDOM from "react-dom";

function TextInputField(props) {
    return (
        <div className="form-group row">
            <label htmlFor={ props.name } className="col-sm-3 col-form-label my-auto">{ props.label }</label>
            <div className="col-sm-9">
                <input type="text" name={ props.name } className="form-control form-control-request" placeholder={ props.placeholder } required/>
            </div>
        </div>
    );
}

function SelectField(props) {
    return (
        <div className="form-group row">
            <label htmlFor={ props.name } className="col-sm-3 col-form-label my-auto">{ props.label }</label>
            <div className="col-sm-9">
                <select name={ props.name } className="custom-select custom-select-request">
                    { props.options.map(option => (
                        <option>{ option }</option>
                    )) }
                </select>
            </div>
        </div>
    );
}

function NumberInputField(props) {
    return (
        <div className="form-group row">
            <label htmlFor={ props.name } className="col-sm-3 col-form-label my-auto">{ props.label }</label>
            <div className="col-sm-9">
                <input className="form-control form-control-request" placeholder={ props.placeholder } type="number" name={ props.name } />
            </div>
        </div>
    );
}

class RequestForm extends Component {
    render() {
        return (
            <form action="/permohonan/needs" method="POST" className="card">
                <div className="card-body py-4 px-5">
                    <h3 className="mb-4 font-weight-bold">Informasi Pasien</h3>

                    <TextInputField name="name" placeholder="Nama Lengkap" label="Nama Pasien" />

                    <TextInputField name="hospital" placeholder="Nama Rumah Sakit" label="Rumah Sakit" />

                    <TextInputField name="city" placeholder="Lokasi Kota/Kabupaten" label="Kota/Kabupaten" />

                    <SelectField name="blood" label="Golongan Darah" options={['A', 'B', 'O', 'AB']} />

                    <NumberInputField name="quantity" placeholder="Masukkan Jumlah Pendonor" label="Jumlah Pendonor" />

                    <SelectField 
                        name="type"
                        label="Pilih Jenis Donor"
                        options={[
                            'Whole Blood (Donor Darah Biasa)',
                            'Apheresis',
                            'Plasma Konvalesen (Penyintas COVID-19)'
                        ]}
                    />

                    <TextInputField name="contact" placeholder="Contoh: 08XXXXXXXXXX" label="Nomor Telepon/WA Aktif" />

                    <input type="hidden" name="date" value={new Date().toISOString().slice(0, 19).replace('T', ' ')} />
                    
                    <br />

                    <div className="form-group row justify-content-center">
                        <button type="submit" className="btn btn-danger btn-md py-3 px-5 btn-request">Kirim Sekarang</button>
                    </div>

                </div>
            </form>
        );
    }
}

export default RequestForm;

if (document.getElementById('requestform')) {
    ReactDOM.render(<RequestForm />, document.getElementById('requestform'));
}
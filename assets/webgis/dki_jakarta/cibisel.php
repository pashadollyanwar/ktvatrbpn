<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css">
        <link rel="stylesheet" href="css/leaflet-measure.css">
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title></title>
    </head>
    <body>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="data/CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1.js"></script>
        <script src="data/bidang53_Merge_bloksurveyrt09_2.js"></script>
        <script src="data/status_tanah_negara_poly_dd_3.js"></script>
        <script src="data/Bidang_STP2_4.js"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-6.229807109049297,106.87508265653264],[-6.22701978083561,106.88013587400849]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_CBS_KTV_BTS21_0');
        map.getPane('pane_CBS_KTV_BTS21_0').style.zIndex = 400;
        var img_CBS_KTV_BTS21_0 = 'data/CBS_KTV_BTS21_0.png';
        var img_bounds_CBS_KTV_BTS21_0 = [[-6.231585736186558,106.87535868995448],[-6.226870688529439,106.87869700507463]];
        var layer_CBS_KTV_BTS21_0 = new L.imageOverlay(img_CBS_KTV_BTS21_0,
                                              img_bounds_CBS_KTV_BTS21_0,
                                              {pane: 'pane_CBS_KTV_BTS21_0'});
        bounds_group.addLayer(layer_CBS_KTV_BTS21_0);
        map.addLayer(layer_CBS_KTV_BTS21_0);
        function pop_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
        }

        function style_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1_0() {
            return {
                pane: 'pane_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(152,125,183,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1');
        map.getPane('pane_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1').style.zIndex = 401;
        map.getPane('pane_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1').style['mix-blend-mode'] = 'normal';
        var layer_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1 = new L.geoJson(json_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1',
            layerName: 'layer_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1',
            pane: 'pane_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1',
            onEachFeature: pop_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1,
            style: style_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1_0,
        });
        bounds_group.addLayer(layer_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1);
        map.addLayer(layer_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1);
        function pop_bidang53_Merge_bloksurveyrt09_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PERSILID'] !== null ? autolinker.link(feature.properties['PERSILID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KANWIL'] !== null ? autolinker.link(feature.properties['KANWIL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KANTAH'] !== null ? autolinker.link(feature.properties['KANTAH'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KECAMATAN'] !== null ? autolinker.link(feature.properties['KECAMATAN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['DESA'] !== null ? autolinker.link(feature.properties['DESA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KODEWILAYA'] !== null ? autolinker.link(feature.properties['KODEWILAYA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">NIB</th>\
                        <td>' + (feature.properties['NIB'] !== null ? autolinker.link(feature.properties['NIB'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SU'] !== null ? autolinker.link(feature.properties['SU'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['HAK'] !== null ? autolinker.link(feature.properties['HAK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">TIPEHAK</th>\
                        <td>' + (feature.properties['TIPEHAK'] !== null ? autolinker.link(feature.properties['TIPEHAK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">LUASTERTUL</th>\
                        <td>' + (feature.properties['LUASTERTUL'] !== null ? autolinker.link(feature.properties['LUASTERTUL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LUASPETA'] !== null ? autolinker.link(feature.properties['LUASPETA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PRODUK'] !== null ? autolinker.link(feature.properties['PRODUK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TAHUN'] !== null ? autolinker.link(feature.properties['TAHUN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SK'] !== null ? autolinker.link(feature.properties['SK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TANGGALSK'] !== null ? autolinker.link(feature.properties['TANGGALSK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TGLTERBITH'] !== null ? autolinker.link(feature.properties['TGLTERBITH'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['BERAKHIRHA'] !== null ? autolinker.link(feature.properties['BERAKHIRHA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">PEMILIK</th>\
                        <td>' + (feature.properties['PEMILIK'] !== null ? autolinker.link(feature.properties['PEMILIK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TIPEPEMILI'] !== null ? autolinker.link(feature.properties['TIPEPEMILI'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['sync_id'] !== null ? autolinker.link(feature.properties['sync_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['nis'] !== null ? autolinker.link(feature.properties['nis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_pemilik'] !== null ? autolinker.link(feature.properties['s1_pemilik'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_jalan'] !== null ? autolinker.link(feature.properties['s1_jalan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_rt'] !== null ? autolinker.link(feature.properties['s1_rt'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_desa'] !== null ? autolinker.link(feature.properties['s1_desa'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_kecamat'] !== null ? autolinker.link(feature.properties['s1_kecamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_kabupat'] !== null ? autolinker.link(feature.properties['s1_kabupat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_umur'] !== null ? autolinker.link(feature.properties['s1_umur'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_ktp'] !== null ? autolinker.link(feature.properties['s1_ktp'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_pekerja'] !== null ? autolinker.link(feature.properties['s1_pekerja'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_sts_kaw'] !== null ? autolinker.link(feature.properties['s1_sts_kaw'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_jenis_k'] !== null ? autolinker.link(feature.properties['s1_jenis_k'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_sts_kel'] !== null ? autolinker.link(feature.properties['s1_sts_kel'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_domisil'] !== null ? autolinker.link(feature.properties['s1_domisil'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_jmlh_ke'] !== null ? autolinker.link(feature.properties['s1_jmlh_ke'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_memilik'] !== null ? autolinker.link(feature.properties['s1_memilik'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_menguas'] !== null ? autolinker.link(feature.properties['s2_menguas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_jalan'] !== null ? autolinker.link(feature.properties['s2_jalan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_rt'] !== null ? autolinker.link(feature.properties['s2_rt'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_desa'] !== null ? autolinker.link(feature.properties['s2_desa'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_kecamat'] !== null ? autolinker.link(feature.properties['s2_kecamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_kabupat'] !== null ? autolinker.link(feature.properties['s2_kabupat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_umur'] !== null ? autolinker.link(feature.properties['s2_umur'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_ktp'] !== null ? autolinker.link(feature.properties['s2_ktp'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_pekerja'] !== null ? autolinker.link(feature.properties['s2_pekerja'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_sts_kaw'] !== null ? autolinker.link(feature.properties['s2_sts_kaw'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_jenis_k'] !== null ? autolinker.link(feature.properties['s2_jenis_k'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_sts_kel'] !== null ? autolinker.link(feature.properties['s2_sts_kel'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_domisil'] !== null ? autolinker.link(feature.properties['s2_domisil'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_jmlh_ke'] !== null ? autolinker.link(feature.properties['s2_jmlh_ke'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_mengua0'] !== null ? autolinker.link(feature.properties['s2_mengua0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pbb'] !== null ? autolinker.link(feature.properties['pbb'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jalan'] !== null ? autolinker.link(feature.properties['jalan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['rt'] !== null ? autolinker.link(feature.properties['rt'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kabupaten'] !== null ? autolinker.link(feature.properties['kabupaten'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">luas_tanah</th>\
                        <td>' + (feature.properties['luas_tanah'] !== null ? autolinker.link(feature.properties['luas_tanah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['panjang_ta'] !== null ? autolinker.link(feature.properties['panjang_ta'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['lebar_tana'] !== null ? autolinker.link(feature.properties['lebar_tana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['bentuk_tan'] !== null ? autolinker.link(feature.properties['bentuk_tan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penguasaan'] !== null ? autolinker.link(feature.properties['penguasaan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penguasaa0'] !== null ? autolinker.link(feature.properties['penguasaa0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penguasaa1'] !== null ? autolinker.link(feature.properties['penguasaa1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penguasaa2'] !== null ? autolinker.link(feature.properties['penguasaa2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemilikan_'] !== null ? autolinker.link(feature.properties['pemilikan_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemilikan0'] !== null ? autolinker.link(feature.properties['pemilikan0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemilikan1'] !== null ? autolinker.link(feature.properties['pemilikan1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemilikan2'] !== null ? autolinker.link(feature.properties['pemilikan2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penggunaan'] !== null ? autolinker.link(feature.properties['penggunaan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penggunaa0'] !== null ? autolinker.link(feature.properties['penggunaa0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penggunaa1'] !== null ? autolinker.link(feature.properties['penggunaa1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penggunaa2'] !== null ? autolinker.link(feature.properties['penggunaa2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemanfaata'] !== null ? autolinker.link(feature.properties['pemanfaata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemanfaat0'] !== null ? autolinker.link(feature.properties['pemanfaat0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemanfaat1'] !== null ? autolinker.link(feature.properties['pemanfaat1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemanfaat2'] !== null ? autolinker.link(feature.properties['pemanfaat2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['perolehan_'] !== null ? autolinker.link(feature.properties['perolehan_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jual_beli'] !== null ? autolinker.link(feature.properties['jual_beli'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['harga_jual'] !== null ? autolinker.link(feature.properties['harga_jual'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['no_sertifi'] !== null ? autolinker.link(feature.properties['no_sertifi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['status_tan'] !== null ? autolinker.link(feature.properties['status_tan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jenis_hak'] !== null ? autolinker.link(feature.properties['jenis_hak'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jenis_bang'] !== null ? autolinker.link(feature.properties['jenis_bang'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tahun_bang'] !== null ? autolinker.link(feature.properties['tahun_bang'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['luas_bangu'] !== null ? autolinker.link(feature.properties['luas_bangu'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tahun_reno'] !== null ? autolinker.link(feature.properties['tahun_reno'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['biaya_bang'] !== null ? autolinker.link(feature.properties['biaya_bang'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kemiringan'] !== null ? autolinker.link(feature.properties['kemiringan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jenis_komo'] !== null ? autolinker.link(feature.properties['jenis_komo'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kelas_jala'] !== null ? autolinker.link(feature.properties['kelas_jala'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['fisik_jala'] !== null ? autolinker.link(feature.properties['fisik_jala'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['lebar_jala'] !== null ? autolinker.link(feature.properties['lebar_jala'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['akses_jala'] !== null ? autolinker.link(feature.properties['akses_jala'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['drainase_j'] !== null ? autolinker.link(feature.properties['drainase_j'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['utilitas'] !== null ? autolinker.link(feature.properties['utilitas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['objek_pent'] !== null ? autolinker.link(feature.properties['objek_pent'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['indikasi_t'] !== null ? autolinker.link(feature.properties['indikasi_t'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['skp_tanah'] !== null ? autolinker.link(feature.properties['skp_tanah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['sertifikat'] !== null ? autolinker.link(feature.properties['sertifikat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ahli_waris'] !== null ? autolinker.link(feature.properties['ahli_waris'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ahli_wari0'] !== null ? autolinker.link(feature.properties['ahli_wari0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kepemilika'] !== null ? autolinker.link(feature.properties['kepemilika'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['rtrw_lokas'] !== null ? autolinker.link(feature.properties['rtrw_lokas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['potensi_ta'] !== null ? autolinker.link(feature.properties['potensi_ta'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tanah_nega'] !== null ? autolinker.link(feature.properties['tanah_nega'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['potensi_ak'] !== null ? autolinker.link(feature.properties['potensi_ak'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['menerima_b'] !== null ? autolinker.link(feature.properties['menerima_b'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jenis_bant'] !== null ? autolinker.link(feature.properties['jenis_bant'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['instansi_b'] !== null ? autolinker.link(feature.properties['instansi_b'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['sebelum_ba'] !== null ? autolinker.link(feature.properties['sebelum_ba'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['setelah_ba'] !== null ? autolinker.link(feature.properties['setelah_ba'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['potensi_al'] !== null ? autolinker.link(feature.properties['potensi_al'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['potensi_bu'] !== null ? autolinker.link(feature.properties['potensi_bu'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['potensi_b0'] !== null ? autolinker.link(feature.properties['potensi_b0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['existing'] !== null ? autolinker.link(feature.properties['existing'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['anggota_ke'] !== null ? autolinker.link(feature.properties['anggota_ke'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemanfaat3'] !== null ? autolinker.link(feature.properties['pemanfaat3'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['menambah_p'] !== null ? autolinker.link(feature.properties['menambah_p'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['usaha_baru'] !== null ? autolinker.link(feature.properties['usaha_baru'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['modal_usah'] !== null ? autolinker.link(feature.properties['modal_usah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['bantuan_di'] !== null ? autolinker.link(feature.properties['bantuan_di'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['usaha_kelo'] !== null ? autolinker.link(feature.properties['usaha_kelo'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['utilitas_r'] !== null ? autolinker.link(feature.properties['utilitas_r'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jarak_anta'] !== null ? autolinker.link(feature.properties['jarak_anta'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['sirkulasi_'] !== null ? autolinker.link(feature.properties['sirkulasi_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gotong_roy'] !== null ? autolinker.link(feature.properties['gotong_roy'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['program_pe'] !== null ? autolinker.link(feature.properties['program_pe'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['hunian_ber'] !== null ? autolinker.link(feature.properties['hunian_ber'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['workspace_'] !== null ? autolinker.link(feature.properties['workspace_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['created_at'] !== null ? autolinker.link(feature.properties['created_at'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['updated_at'] !== null ? autolinker.link(feature.properties['updated_at'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['status'] !== null ? autolinker.link(feature.properties['status'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gotong_ro0'] !== null ? autolinker.link(feature.properties['gotong_ro0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['program_p0'] !== null ? autolinker.link(feature.properties['program_p0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['hunian_be0'] !== null ? autolinker.link(feature.properties['hunian_be0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas</th>\
                        <td>' + (feature.properties['Luas'] !== null ? autolinker.link(feature.properties['Luas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Resapon_KT'] !== null ? autolinker.link(feature.properties['Resapon_KT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Potensi_Pa'] !== null ? autolinker.link(feature.properties['Potensi_Pa'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Surat'] !== null ? autolinker.link(feature.properties['Surat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LKN'] !== null ? autolinker.link(feature.properties['LKN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['bebas'] !== null ? autolinker.link(feature.properties['bebas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RBS'] !== null ? autolinker.link(feature.properties['RBS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No_BS'] !== null ? autolinker.link(feature.properties['No_BS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_bidang53_Merge_bloksurveyrt09_2_0() {
            return {
                pane: 'pane_bidang53_Merge_bloksurveyrt09_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(243,166,178,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_bidang53_Merge_bloksurveyrt09_2');
        map.getPane('pane_bidang53_Merge_bloksurveyrt09_2').style.zIndex = 402;
        map.getPane('pane_bidang53_Merge_bloksurveyrt09_2').style['mix-blend-mode'] = 'normal';
        var layer_bidang53_Merge_bloksurveyrt09_2 = new L.geoJson(json_bidang53_Merge_bloksurveyrt09_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_bidang53_Merge_bloksurveyrt09_2',
            layerName: 'layer_bidang53_Merge_bloksurveyrt09_2',
            pane: 'pane_bidang53_Merge_bloksurveyrt09_2',
            onEachFeature: pop_bidang53_Merge_bloksurveyrt09_2,
            style: style_bidang53_Merge_bloksurveyrt09_2_0,
        });
        bounds_group.addLayer(layer_bidang53_Merge_bloksurveyrt09_2);
        map.addLayer(layer_bidang53_Merge_bloksurveyrt09_2);
        function pop_status_tanah_negara_poly_dd_3(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['sync_id'] !== null ? autolinker.link(feature.properties['sync_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['nis'] !== null ? autolinker.link(feature.properties['nis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_pemilik'] !== null ? autolinker.link(feature.properties['s1_pemilik'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_jalan'] !== null ? autolinker.link(feature.properties['s1_jalan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_rt'] !== null ? autolinker.link(feature.properties['s1_rt'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_desa'] !== null ? autolinker.link(feature.properties['s1_desa'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_kecamat'] !== null ? autolinker.link(feature.properties['s1_kecamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_kabupat'] !== null ? autolinker.link(feature.properties['s1_kabupat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_umur'] !== null ? autolinker.link(feature.properties['s1_umur'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_ktp'] !== null ? autolinker.link(feature.properties['s1_ktp'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_pekerja'] !== null ? autolinker.link(feature.properties['s1_pekerja'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_sts_kaw'] !== null ? autolinker.link(feature.properties['s1_sts_kaw'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_jenis_k'] !== null ? autolinker.link(feature.properties['s1_jenis_k'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_sts_kel'] !== null ? autolinker.link(feature.properties['s1_sts_kel'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_domisil'] !== null ? autolinker.link(feature.properties['s1_domisil'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_jmlh_ke'] !== null ? autolinker.link(feature.properties['s1_jmlh_ke'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s1_memilik'] !== null ? autolinker.link(feature.properties['s1_memilik'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_menguas'] !== null ? autolinker.link(feature.properties['s2_menguas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_jalan'] !== null ? autolinker.link(feature.properties['s2_jalan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_rt'] !== null ? autolinker.link(feature.properties['s2_rt'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_desa'] !== null ? autolinker.link(feature.properties['s2_desa'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_kecamat'] !== null ? autolinker.link(feature.properties['s2_kecamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_kabupat'] !== null ? autolinker.link(feature.properties['s2_kabupat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_umur'] !== null ? autolinker.link(feature.properties['s2_umur'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_ktp'] !== null ? autolinker.link(feature.properties['s2_ktp'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_pekerja'] !== null ? autolinker.link(feature.properties['s2_pekerja'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_sts_kaw'] !== null ? autolinker.link(feature.properties['s2_sts_kaw'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_jenis_k'] !== null ? autolinker.link(feature.properties['s2_jenis_k'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_sts_kel'] !== null ? autolinker.link(feature.properties['s2_sts_kel'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_domisil'] !== null ? autolinker.link(feature.properties['s2_domisil'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_jmlh_ke'] !== null ? autolinker.link(feature.properties['s2_jmlh_ke'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['s2_mengua0'] !== null ? autolinker.link(feature.properties['s2_mengua0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">nib</th>\
                        <td>' + (feature.properties['nib'] !== null ? autolinker.link(feature.properties['nib'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pbb'] !== null ? autolinker.link(feature.properties['pbb'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jalan'] !== null ? autolinker.link(feature.properties['jalan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['rt'] !== null ? autolinker.link(feature.properties['rt'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['desa'] !== null ? autolinker.link(feature.properties['desa'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kecamatan'] !== null ? autolinker.link(feature.properties['kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kabupaten'] !== null ? autolinker.link(feature.properties['kabupaten'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['luas_tanah'] !== null ? autolinker.link(feature.properties['luas_tanah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['panjang_ta'] !== null ? autolinker.link(feature.properties['panjang_ta'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['lebar_tana'] !== null ? autolinker.link(feature.properties['lebar_tana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['bentuk_tan'] !== null ? autolinker.link(feature.properties['bentuk_tan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penguasaan'] !== null ? autolinker.link(feature.properties['penguasaan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penguasaa0'] !== null ? autolinker.link(feature.properties['penguasaa0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penguasaa1'] !== null ? autolinker.link(feature.properties['penguasaa1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penguasaa2'] !== null ? autolinker.link(feature.properties['penguasaa2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemilikan_'] !== null ? autolinker.link(feature.properties['pemilikan_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemilikan0'] !== null ? autolinker.link(feature.properties['pemilikan0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemilikan1'] !== null ? autolinker.link(feature.properties['pemilikan1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemilikan2'] !== null ? autolinker.link(feature.properties['pemilikan2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penggunaan'] !== null ? autolinker.link(feature.properties['penggunaan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penggunaa0'] !== null ? autolinker.link(feature.properties['penggunaa0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penggunaa1'] !== null ? autolinker.link(feature.properties['penggunaa1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['penggunaa2'] !== null ? autolinker.link(feature.properties['penggunaa2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemanfaata'] !== null ? autolinker.link(feature.properties['pemanfaata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemanfaat0'] !== null ? autolinker.link(feature.properties['pemanfaat0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemanfaat1'] !== null ? autolinker.link(feature.properties['pemanfaat1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemanfaat2'] !== null ? autolinker.link(feature.properties['pemanfaat2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['perolehan_'] !== null ? autolinker.link(feature.properties['perolehan_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jual_beli'] !== null ? autolinker.link(feature.properties['jual_beli'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['harga_jual'] !== null ? autolinker.link(feature.properties['harga_jual'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['no_sertifi'] !== null ? autolinker.link(feature.properties['no_sertifi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">status_tan</th>\
                        <td>' + (feature.properties['status_tan'] !== null ? autolinker.link(feature.properties['status_tan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jenis_hak'] !== null ? autolinker.link(feature.properties['jenis_hak'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jenis_bang'] !== null ? autolinker.link(feature.properties['jenis_bang'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tahun_bang'] !== null ? autolinker.link(feature.properties['tahun_bang'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['luas_bangu'] !== null ? autolinker.link(feature.properties['luas_bangu'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tahun_reno'] !== null ? autolinker.link(feature.properties['tahun_reno'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['biaya_bang'] !== null ? autolinker.link(feature.properties['biaya_bang'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kemiringan'] !== null ? autolinker.link(feature.properties['kemiringan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jenis_komo'] !== null ? autolinker.link(feature.properties['jenis_komo'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kelas_jala'] !== null ? autolinker.link(feature.properties['kelas_jala'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['fisik_jala'] !== null ? autolinker.link(feature.properties['fisik_jala'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['lebar_jala'] !== null ? autolinker.link(feature.properties['lebar_jala'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['akses_jala'] !== null ? autolinker.link(feature.properties['akses_jala'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['drainase_j'] !== null ? autolinker.link(feature.properties['drainase_j'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['utilitas'] !== null ? autolinker.link(feature.properties['utilitas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['objek_pent'] !== null ? autolinker.link(feature.properties['objek_pent'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['indikasi_t'] !== null ? autolinker.link(feature.properties['indikasi_t'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['skp_tanah'] !== null ? autolinker.link(feature.properties['skp_tanah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sertifikat</th>\
                        <td>' + (feature.properties['sertifikat'] !== null ? autolinker.link(feature.properties['sertifikat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ahli_waris'] !== null ? autolinker.link(feature.properties['ahli_waris'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ahli_wari0'] !== null ? autolinker.link(feature.properties['ahli_wari0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kepemilika'] !== null ? autolinker.link(feature.properties['kepemilika'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['rtrw_lokas'] !== null ? autolinker.link(feature.properties['rtrw_lokas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['potensi_ta'] !== null ? autolinker.link(feature.properties['potensi_ta'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tanah_nega'] !== null ? autolinker.link(feature.properties['tanah_nega'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['potensi_ak'] !== null ? autolinker.link(feature.properties['potensi_ak'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['menerima_b'] !== null ? autolinker.link(feature.properties['menerima_b'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jenis_bant'] !== null ? autolinker.link(feature.properties['jenis_bant'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['instansi_b'] !== null ? autolinker.link(feature.properties['instansi_b'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['sebelum_ba'] !== null ? autolinker.link(feature.properties['sebelum_ba'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['setelah_ba'] !== null ? autolinker.link(feature.properties['setelah_ba'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['potensi_al'] !== null ? autolinker.link(feature.properties['potensi_al'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['potensi_bu'] !== null ? autolinker.link(feature.properties['potensi_bu'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['potensi_b0'] !== null ? autolinker.link(feature.properties['potensi_b0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['existing'] !== null ? autolinker.link(feature.properties['existing'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['anggota_ke'] !== null ? autolinker.link(feature.properties['anggota_ke'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pemanfaat3'] !== null ? autolinker.link(feature.properties['pemanfaat3'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['menambah_p'] !== null ? autolinker.link(feature.properties['menambah_p'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['usaha_baru'] !== null ? autolinker.link(feature.properties['usaha_baru'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['modal_usah'] !== null ? autolinker.link(feature.properties['modal_usah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['bantuan_di'] !== null ? autolinker.link(feature.properties['bantuan_di'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['usaha_kelo'] !== null ? autolinker.link(feature.properties['usaha_kelo'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['utilitas_r'] !== null ? autolinker.link(feature.properties['utilitas_r'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jarak_anta'] !== null ? autolinker.link(feature.properties['jarak_anta'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['sirkulasi_'] !== null ? autolinker.link(feature.properties['sirkulasi_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gotong_roy'] !== null ? autolinker.link(feature.properties['gotong_roy'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['program_pe'] !== null ? autolinker.link(feature.properties['program_pe'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['hunian_ber'] !== null ? autolinker.link(feature.properties['hunian_ber'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['workspace_'] !== null ? autolinker.link(feature.properties['workspace_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['created_at'] !== null ? autolinker.link(feature.properties['created_at'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['updated_at'] !== null ? autolinker.link(feature.properties['updated_at'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['status'] !== null ? autolinker.link(feature.properties['status'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gotong_ro0'] !== null ? autolinker.link(feature.properties['gotong_ro0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['program_p0'] !== null ? autolinker.link(feature.properties['program_p0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['hunian_be0'] !== null ? autolinker.link(feature.properties['hunian_be0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Luas'] !== null ? autolinker.link(feature.properties['Luas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Resapon_KT'] !== null ? autolinker.link(feature.properties['Resapon_KT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Potensi_Pa'] !== null ? autolinker.link(feature.properties['Potensi_Pa'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Surat'] !== null ? autolinker.link(feature.properties['Surat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LKN'] !== null ? autolinker.link(feature.properties['LKN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['bebas'] !== null ? autolinker.link(feature.properties['bebas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RBS'] !== null ? autolinker.link(feature.properties['RBS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No_BS'] !== null ? autolinker.link(feature.properties['No_BS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_status_tanah_negara_poly_dd_3_0() {
            return {
                pane: 'pane_status_tanah_negara_poly_dd_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(213,180,60,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_status_tanah_negara_poly_dd_3');
        map.getPane('pane_status_tanah_negara_poly_dd_3').style.zIndex = 403;
        map.getPane('pane_status_tanah_negara_poly_dd_3').style['mix-blend-mode'] = 'normal';
        var layer_status_tanah_negara_poly_dd_3 = new L.geoJson(json_status_tanah_negara_poly_dd_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_status_tanah_negara_poly_dd_3',
            layerName: 'layer_status_tanah_negara_poly_dd_3',
            pane: 'pane_status_tanah_negara_poly_dd_3',
            onEachFeature: pop_status_tanah_negara_poly_dd_3,
            style: style_status_tanah_negara_poly_dd_3_0,
        });
        bounds_group.addLayer(layer_status_tanah_negara_poly_dd_3);
        map.addLayer(layer_status_tanah_negara_poly_dd_3);
        function pop_Bidang_STP2_4(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PERSILID'] !== null ? autolinker.link(feature.properties['PERSILID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KANWIL'] !== null ? autolinker.link(feature.properties['KANWIL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KANTAH'] !== null ? autolinker.link(feature.properties['KANTAH'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KECAMATAN'] !== null ? autolinker.link(feature.properties['KECAMATAN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['DESA'] !== null ? autolinker.link(feature.properties['DESA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KODEWILAYA'] !== null ? autolinker.link(feature.properties['KODEWILAYA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">NIB</th>\
                        <td>' + (feature.properties['NIB'] !== null ? autolinker.link(feature.properties['NIB'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SU'] !== null ? autolinker.link(feature.properties['SU'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['HAK'] !== null ? autolinker.link(feature.properties['HAK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">TIPEHAK</th>\
                        <td>' + (feature.properties['TIPEHAK'] !== null ? autolinker.link(feature.properties['TIPEHAK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">LUASTERTUL</th>\
                        <td>' + (feature.properties['LUASTERTUL'] !== null ? autolinker.link(feature.properties['LUASTERTUL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LUASPETA'] !== null ? autolinker.link(feature.properties['LUASPETA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PRODUK'] !== null ? autolinker.link(feature.properties['PRODUK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TAHUN'] !== null ? autolinker.link(feature.properties['TAHUN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SK'] !== null ? autolinker.link(feature.properties['SK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TANGGALSK'] !== null ? autolinker.link(feature.properties['TANGGALSK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TGLTERBITH'] !== null ? autolinker.link(feature.properties['TGLTERBITH'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['BERAKHIRHA'] !== null ? autolinker.link(feature.properties['BERAKHIRHA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">PEMILIK</th>\
                        <td>' + (feature.properties['PEMILIK'] !== null ? autolinker.link(feature.properties['PEMILIK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TIPEPEMILI'] !== null ? autolinker.link(feature.properties['TIPEPEMILI'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Leng'] !== null ? autolinker.link(feature.properties['Shape_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Area'] !== null ? autolinker.link(feature.properties['Shape_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Bidang_STP2_4_0() {
            return {
                pane: 'pane_Bidang_STP2_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(75,224,243,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_Bidang_STP2_4');
        map.getPane('pane_Bidang_STP2_4').style.zIndex = 404;
        map.getPane('pane_Bidang_STP2_4').style['mix-blend-mode'] = 'normal';
        var layer_Bidang_STP2_4 = new L.geoJson(json_Bidang_STP2_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Bidang_STP2_4',
            layerName: 'layer_Bidang_STP2_4',
            pane: 'pane_Bidang_STP2_4',
            onEachFeature: pop_Bidang_STP2_4,
            style: style_Bidang_STP2_4_0,
        });
        bounds_group.addLayer(layer_Bidang_STP2_4);
        map.addLayer(layer_Bidang_STP2_4);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .title += 'Search for a place';
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/Bidang_STP2_4.png" /> Bidang_STP2': layer_Bidang_STP2_4,'<img src="legend/status_tanah_negara_poly_dd_3.png" /> status_tanah_negara_poly_dd': layer_status_tanah_negara_poly_dd_3,'<img src="legend/bidang53_Merge_bloksurveyrt09_2.png" /> bidang53_Merge_bloksurveyrt09': layer_bidang53_Merge_bloksurveyrt09_2,'<img src="legend/CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1.png" /> CBS_KTV_BTS2 (1) Layers_Rincikan_Sodetan_Ciliwung': layer_CBS_KTV_BTS21Layers_Rincikan_Sodetan_Ciliwung_1,"CBS_KTV_BTS2 (1)": layer_CBS_KTV_BTS21_0,}).addTo(map);
        setBounds();
        L.ImageOverlay.include({
            getBounds: function () {
                return this._bounds;
            }
        });
        resetLabels([layer_Bidang_STP2_4]);
        map.on("zoomend", function(){
            resetLabels([layer_Bidang_STP2_4]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_Bidang_STP2_4]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_Bidang_STP2_4]);
        });
        </script>
    </body>
</html>

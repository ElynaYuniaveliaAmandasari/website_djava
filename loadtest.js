import http from 'k6/http';
import { check } from 'k6';

export const options = {
  vus: 100,           // jumlah virtual user
  duration: '30s',   // waktu test
};

export default function () {
  const res = http.get('http://192.168.79.219:8000');
  check(res, { 'status is 200': (r) => r.status === 200 });
}

var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});


/* trang table */
router.get('/table.html', function(req, res, next) {
  res.render('table', { title: 'trang table' });
});


module.exports = router;

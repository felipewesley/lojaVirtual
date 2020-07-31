/* This script file created in July 1st, 2020. */

let mvc;

function showMvcArchiteture() {
	try {
		mvc.close();
		if (mvc !== null) {
			throw new Exception();
		}
		mvc = null;
	} catch(e) {
		mvc = window.open('../img/padrao_mvc.jpg', '_blank', 'width=500,height=500');
	}
	return true;
}

function openProject() {
    return window.open("https://github.com/felipewesley/mini-framework-php-mvc", '_blank');
}

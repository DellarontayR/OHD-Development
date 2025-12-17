import * as THREE from 'three';

// import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
// import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

const renderer = new THREE.WebGLRenderer();
renderer.setSize( window.innerWidth, window.innerHeight );
renderer.setAnimationLoop( animate );
document.body.appendChild( renderer.domElement );

const geometry = new THREE.BoxGeometry( 1, 1, 1 );
const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
const cube = new THREE.Mesh( geometry, material );
scene.add( cube );

camera.position.z = 5;


// const controls = new OrbitControls( camera, renderer.domElement );
// const loader = new GLTFLoader();

function animate() {
	// requestAnimationFrame( animate );

	cube.rotation.x += 0.01;
	cube.rotation.y += 0.01;

	renderer.render( scene, camera );
}
// renderer.setAnimationLoop( animate );


// movement - please calibrate these values
var xSpeed = .5;
var ySpeed = .5;

// Enable Cube movement with keys and front-end
document.addEventListener("keydown", onDocumentKeyDown, false);
document.getElementById("up").addEventListener("mousedown",moveUp,false);
document.getElementById("left").addEventListener("mousedown",moveLeft,false);
document.getElementById("down").addEventListener("mousedown",moveDown,false);
document.getElementById("right").addEventListener("mousedown",moveRight,false);

function moveUp(event){
    cube.position.y += ySpeed;
}

function moveLeft(event){
    cube.position.x -= xSpeed;
}
function moveDown(event){
    cube.position.y -= ySpeed;
}
function moveRight(event){
    cube.position.x += xSpeed;
}

function onDocumentKeyDown(event) {
    var keyCode = event.which;
    if (keyCode == 87) {
        cube.position.y += ySpeed;
    } else if (keyCode == 83) {
        cube.position.y -= ySpeed;
    } else if (keyCode == 65) {
        cube.position.x -= xSpeed;
    } else if (keyCode == 68) {
        cube.position.x += xSpeed;
    } else if (keyCode == 32) {
        cube.position.set(0, 0, 0);
    }
};

animate();
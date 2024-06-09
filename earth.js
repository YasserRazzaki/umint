const scene = new THREE.Scene();
    
// Créer une caméra
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
camera.position.z = 5;

// Créer un rendu
const renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);
document.getElementById("earthCanvas").appendChild(renderer.domElement);

// Créer la planète Terre
const geometry = new THREE.SphereGeometry(1, 32, 32);
const texture = new THREE.TextureLoader().load('Earth_Texture.webp'); // Assurez-vous de disposer d'une image de texture pour la Terre.
const material = new THREE.MeshBasicMaterial({ map: texture });
const earth = new THREE.Mesh(geometry, material);
scene.add(earth);

// Ajouter une lumière pour un meilleur rendu
const light = new THREE.PointLight(0xFFFFFF);
light.position.set(5, 5, 5);
scene.add(light);// ... (Code précédent) ...

// Créer les contrôles OrbitControls
const controls = new THREE.OrbitControls(camera, renderer.domElement);
controls.autoRotate = true; // Rotation automatique de la Terre
controls.enableZoom = true; // Autoriser le zoom avec la molette de la souris
controls.enablePan = false; // Désactiver le panoramique

// Animation de rotation
const animate = () => {
requestAnimationFrame(animate);

// Faites tourner la planète Terre sur son axe Y
earth.rotation.y += 0.005;

controls.update(); // Mettez à jour les contrôles

renderer.render(scene, camera);
};

animate();
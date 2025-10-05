<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Gestion de Projets</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            box-sizing: border-box;
        }
        .fade-in {
            animation: fadeIn 0.3s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .tab-active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .project-card {
            transition: all 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-b from-[#071029] to-[#071a2a]">
    <!-- Header -->
    <header class="bg-blue-200 shadow-lg border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">A</span>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Administration</h1>
                        <p class="text-sm text-gray-600">Tableau de bord</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                        👋 Bonjour Admin
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-6 py-8">
        <!-- Navigation Tabs -->
        <div class="flex space-x-1 bg-gray-100 p-1 rounded-xl mb-8">
            <button onclick="switchTab('projects')" id="tab-projects" class="tab-active flex-1 py-3 px-6 rounded-lg font-medium transition-all duration-200 flex items-center justify-center space-x-2">
                <span>📊</span>
                <span>Gestion de Projets</span>
            </button>

            <button onclick="switchTab('contacts')" id="tab-contacts" class="flex-1 py-3 px-6 rounded-lg font-medium transition-all duration-200 flex items-center justify-center space-x-2 text-gray-600 hover:text-gray-800">
                <span>📧</span>
                <span>Messages Clients</span>
            </button>
        </div>
<!-- ---------------------------------------------Projects Tab --------------------------------------------------->
        <div id="projects-content" class="fade-in">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Projets Actifs</p>
                            <p class="text-2xl font-bold text-gray-800" id="active-projects">12</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">🚀</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">En Attente</p>
                            <p class="text-2xl font-bold text-gray-800" id="pending-projects">5</p>
                        </div>
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">⏳</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Terminés</p>
                            <p class="text-2xl font-bold text-gray-800" id="completed-projects">28</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">✅</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Revenus</p>
                            <p class="text-2xl font-bold text-gray-800">€45,200</p>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">💰</span>
                        </div>
                    </div>
                </div>
            </div>

            <!--------------------------------- click sur BTN pour  afficher le formullaire d ajout projet------------------------------------------------------------------- -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-gray-800">Liste des Projets</h2>
                <button onclick="showAddProjectModal()" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-lg font-medium hover:from-blue-700 hover:to-purple-700 transition-all duration-200 flex items-center space-x-2">
                    <span>➕</span>
                    <span>Nouveau Projet</span>
                </button>
            </div>
            <!----------------------------------------------------------------------------------------------------------------->    

            <!-- Projects List -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6" id="projects-list">
     
                <!-- Projects will be populated by JavaScript -->

            </div>
        </div>
<!-- ------------------------------------------------------------------------------------------------------------------- -->

<!-- ------------------------------- Contacts Tab ----------------------------------------------------------- -->
        <div id="contacts-content" class="hidden">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-gray-800">Messages des Clients</h2>
                <div class="flex items-center space-x-4">
                    <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium" id="unread-count">3 non lus</span>
                </div>
            </div>

            <!-- Contacts List -->
            <div class="space-y-4" id="contacts-list">

                <!-- Contacts will be populated by JavaScript -->

            </div>
        </div>
    </div>

<!---------------------- --------------------Add Project Modal------------------------------------------------------------->

    <div id="add-project-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-xl p-8 max-w-md w-full mx-4">
            <h3 class="text-xl font-bold text-gray-800 mb-6">Nouveau Projet</h3>
                         <!--Formullaire-->
            <form onsubmit="addProject(event)">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nom du projet</label>
                        <input type="text" id="project-name" required  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">

                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Client</label>
                        <input type="text" id="project-client" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2"> Statut</label>
                        <select id="project-status" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="En cours">En cours</option>
                            <option value="En attente">En attente</option>
                            <option value="Terminé">Terminé</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2"> Budget (€)</label>
                        <input type="number" id="project-budget" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
                <div class="flex space-x-4 mt-8">
                    <button type="button" onclick="hideAddProjectModal()" class="flex-1 px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                        Annuler
                    </button>
                    <button type="submit" class="flex-1 px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all">
                        Créer
                    </button>
                </div>
            </form>
        </div>
    </div>
 <!----------------------------------------------------------------------------------------------------------------->    

<!----------------------------------- Contact Detail Modal ------------------------------------------------------------->
    <div id="contact-detail-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-xl p-8 max-w-2xl w-full mx-4 max-h-[80vh] overflow-y-auto">
            <div class="flex justify-between items-start mb-6">
                <h3 class="text-xl font-bold text-gray-800">Détails du Message</h3>

                <button onclick="hideContactModal()" class="text-gray-500 hover:text-gray-700">
                    <span class="text-2xl">×</span>
                </button>
            </div>
            <div id="contact-detail-content">
                <!-- Content will be populated by JavaScript -->
            </div>
            <div class="flex space-x-4 mt-8">

                <button onclick="markAsRead()" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                    Marquer comme lu
                </button>
                <button onclick="hideContactModal()" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                    Fermer
                </button>
            </div>
        </div>
    </div>
<!----------------------------------------------------------------------------------------------------------------->    
    <script>
//====================== projects = data =================================
       fetch('RecupererProjet.php')
        .then(response => response.json())
        .then(data => {
            projects = data;
            updateStats();
            renderProjects();
        })
        .catch(error => console.error('Erreur lors de la récupération des projets :', error));
//====================== contact= data ======================================
        fetch('RecupirerContact.php')
        .then(response => response.json())
        .then(data => {
            contacts = data ;
            renderContacts();

        })
      
//==================================== Tab switching=====================================================
  let currentContactId = null;
        function switchTab(tab) {
            // Update tab buttons
            document.querySelectorAll('[id^="tab-"]').forEach(btn => {
                btn.classList.remove('tab-active');
                btn.classList.add('text-gray-600', 'hover:text-gray-800');
            });
            
            document.getElementById(`tab-${tab}`).classList.add('tab-active');
            document.getElementById(`tab-${tab}`).classList.remove('text-gray-600', 'hover:text-gray-800');

            // Show/hide content
            document.getElementById('projects-content').classList.toggle('hidden', tab !== 'projects');
            document.getElementById('contacts-content').classList.toggle('hidden', tab !== 'contacts');

            if (tab === 'projects') {
                renderProjects();
            } else {
                renderContacts();
            }
        }
//====================================== affiche la liste des projets ============================================================

        // Génère et affiche la liste des projets sous forme de cartes
        //  avec progression, statut, budget et boutons d'action.

        function renderProjects() {
            const container = document.getElementById('projects-list');
            container.innerHTML = projects.map(project => `
                <div class="project-card bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">${project.name}</h3>
                            <p class="text-gray-600">Client: ${project.client}</p>
                        </div>
                        <span class="px-3 py-1 rounded-full text-sm font-medium ${getStatusColor(project.status)}">
                            ${project.status}
                        </span>
                    </div>
                    <div class="mb-4">
                        <div class="flex justify-between text-sm text-gray-600 mb-2">
                            <span>Progression</span>
                            <span>${project.progress}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-blue-600 to-purple-600 h-2 rounded-full transition-all duration-300" style="width: ${project.progress}%"></div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-gray-800">€${project.budget.toLocaleString()}</span>
                        <div class="flex space-x-2">
                            <button onclick="editProject(${project.id})" class="px-4 py-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                ✏️ Modifier
                            </button>
                            <button onclick="deleteProject(${project.id})" class="px-4 py-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                🗑️ Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');
        }
//=============================================================================================================  
      
//==================================== Contacts Management =====================================================
        // affiche la liste des messages clients avec options pour marquer comme lu et supprimer
        function renderContacts() {
            const container = document.getElementById('contacts-list');

            const unreadCount = contacts.filter(c => !c.read).length;
            document.getElementById('unread-count').textContent = `${unreadCount} non lus`;

            container.innerHTML = contacts.map(contact => `
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 cursor-pointer hover:shadow-md transition-all ${!contact.read ? 'border-l-4 border-l-blue-500' : ''}" onclick="showContactDetail(${contact.id})">
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <div class="flex items-center space-x-3 mb-2">
                                <h3 class="text-lg font-semibold text-gray-800">${contact.name}</h3>
                                ${!contact.read ? '<span class="w-2 h-2 bg-blue-500 rounded-full"></span>' : ''}
                            </div>
                            <p class="text-gray-600 mb-2">${contact.email}</p>
                            <p class="text-gray-800 font-medium mb-2">${contact.subject}</p>
                            <p class="text-gray-600 text-sm line-clamp-2">${contact.message.substring(0, 100)}...</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500">${formatDate(contact.date)}</p>
                            <div class="mt-2 flex space-x-2">
                                <button onclick="event.stopPropagation(); markContactAsRead(${contact.id})" class="px-3 py-1 text-xs bg-green-100 text-green-800 rounded-full hover:bg-green-200 transition-colors">
                                    ${contact.read ? 'Lu' : 'Marquer lu'}
                                </button>
                                <button onclick="event.stopPropagation(); deleteContact(${contact.id})" class="px-3 py-1 text-xs bg-red-100 text-red-800 rounded-full hover:bg-red-200 transition-colors">
                                    Supprimer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('');
        }

//=================================================================================================================

        // l etat de projet 
        function getStatusColor(status) {
            switch(status) {
                case 'En cours': return 'bg-green-100 text-green-800';
                case 'En attente': return 'bg-yellow-100 text-yellow-800';
                case 'Terminé': return 'bg-blue-100 text-blue-800';
                default: return 'bg-gray-100 text-gray-800';
            }
        } 
         // formate la date en français
        function formatDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString('fr-FR');
        }

        // Ouvre la fenêtre modale pour ajouter un nouveau projet
        function showAddProjectModal() {
            document.getElementById('add-project-modal').classList.remove('hidden');
            document.getElementById('add-project-modal').classList.add('flex');
        }

        function hideAddProjectModal() {
            //annuller
            document.getElementById('add-project-modal').classList.add('hidden');
            document.getElementById('add-project-modal').classList.remove('flex');
        }

        // Ouvre une fenêtre modale détaillée pour afficher toutes les informations d'un message
        function showContactDetail(id) {
            currentContactId = id;
            const contact = contacts.find(c => c.id === id);
            if (contact) {
                document.getElementById('contact-detail-content').innerHTML = `
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nom</label>
                            <p class="text-gray-800 font-medium">${contact.name}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <p class="text-gray-800">${contact.email}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Sujet</label>
                            <p class="text-gray-800 font-medium">${contact.subject}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Date</label>
                            <p class="text-gray-600">${formatDate(contact.date)}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Message</label>
                            <div class="bg-gray-50 p-4 rounded-lg mt-2">
                                <p class="text-gray-800 leading-relaxed">${contact.message}</p>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Statut</label>
                            <span class="inline-block mt-1 px-3 py-1 rounded-full text-sm font-medium ${contact.read ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'}">
                                ${contact.read ? 'Lu' : 'Non lu'}
                            </span>
                        </div>
                    </div>
                `;
                document.getElementById('contact-detail-modal').classList.remove('hidden');
                document.getElementById('contact-detail-modal').classList.add('flex');
            }
        }
   //lorsque on click sur un message il affiche les detaille mais 
   // cette function Ferme la fenêtre modale de détail du contact
   //  et remet à zéro l'identifiant du contact actuel.
        function hideContactModal() {
            document.getElementById('contact-detail-modal').classList.add('hidden');
            document.getElementById('contact-detail-modal').classList.remove('flex');
            currentContactId = null;
        }

        function markAsRead() {
            if (currentContactId) {
                markContactAsRead(currentContactId);
                hideContactModal();
            }
        }

        function markContactAsRead(id) {
            const contact = contacts.find(c => c.id === id);
            if (contact) {
                contact.read = true;
                renderContacts();
            }
        }
            // pour supprimmer les contact en qui ont  base de donne 
        function deleteContact(id) {
            if (confirm('Êtes-vous sûr de vouloir supprimer ce message ?')) {
                contacts = contacts.filter(c => c.id !== id);
                 renderContacts();
               // une function qui supprimmer les contact  en base de domnne 
            }
        }

        // Update statistics
        function updateStats() {
            const activeCount = projects.filter(p => p.status === 'En cours').length;
            const pendingCount = projects.filter(p => p.status === 'En attente').length;
            const completedCount = projects.filter(p => p.status === 'Terminé').length;
            
            document.getElementById('active-projects').textContent = activeCount;
            document.getElementById('pending-projects').textContent = pendingCount;
            document.getElementById('completed-projects').textContent = completedCount;
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            updateStats();
            renderProjects();
        });
    </script>

<script>
(function(){
    function c(){var b=a.contentDocument||a.contentWindow.document;
    if(b){var d=b.createElement('script');
    d.innerHTML="window.__CF$cv$params={r:'989d1e9ee32ccfb1',t:'MTc1OTY2OTQxMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
    b.getElementsByTagName('head')[0].appendChild(d)
    }
    }if(document.body){
        var a=document.createElement('iframe');
        a.height=1;
        a.width=1;
        a.style.position='absolute';
        a.style.top=0;a.style.left=0;
        a.style.border='none';
        a.style.visibility='hidden';
        document.body.appendChild(a);
        if('loading'!==document.readyState)c();
        else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);
        else{
            var e=document.onreadystatechange||function(){};
            document.onreadystatechange=function(b){e(b);
            'loading'!==document.readyState&&(document.onreadystatechange=e,c())
            }
            }}})();
</script>
</body>
</html>

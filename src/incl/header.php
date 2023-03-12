<header class="px-8 py-4 mb-3 bg-slate-800 items-center">
    <nav class="grid grid-cols-9">
        <div class="col-span-1">
              <a href="index.php">
                <h1 class="text-4xl font-semibold text-yellow-300">Bank</h1>
              </a>
        </div>
        <div class="col-span-3">
            <div class="md:flex md:justify-start md:space-x-2 space-y-2">
                 
                 <ul class="md:flex pt-[0.7rem] md:space-x-3 ml-3 text-slate-50">
                    <li>
                        <a href="Comptes.php" class="transition ease-linear duration-150 hover:text-yellow-200">Mes Comptes</a>
                    </li>

                    <li>
                        <a href="virements.php" class="transition ease-linear duration-150  hover:text-yellow-200">Virements</a>
                    </li>

                    <li>
                        <a href="budget.php" class="transition ease-linear duration-150 hover:text-yellow-200">Mon budget</a>
                    </li>
                 </ul>
            </div>
        </div>

        <div class="col-span-5">
             <div class="md:flex md:justify-end md:space-x-4 space-y-2">
                <ul class="md:flex md:space-x-3">
                    <li class="relative group">
                        <a href="notification.php" class="flex flex-col items-center text-slate-50 group-hover:text-yellow-200">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-slate-50 stroke-1 transition ease-linear duration-150  group-hover:stroke-yellow-200">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                           </svg>
                        Notifications</a>
                        <span class="w-4 h-4 text-center rounded-full bg-red-500 text-white text-xs absolute -top-[0.50rem] right-[1.8rem]">6</span>
                    </li>
                    <li class="relative border-l-2 group">
                        <a href="messagerie.php" class="flex flex-col items-center text-slate-50 pl-1 group-hover:text-yellow-200">
                           
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-slate-50 stroke-1 transition ease-linear duration-150  group-hover:stroke-yellow-200">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                           </svg>

                            Messagerie
                        </a>
                        <span class="w-4 h-4 text-center rounded-full bg-red-500 text-white text-xs absolute -top-[0.50rem] right-[1.5rem]">6</span>
                    </li>

                    <li class=" border-l-2 group">
                        <a href="documents.php" class="flex flex-col items-center text-slate-50 pl-1 group-hover:text-yellow-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-slate-50 stroke-1 transition ease-linear duration-150  group-hover:stroke-yellow-200">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                            </svg>
                            Documents
                        </a>

                    </li>

                    <li class=" border-l-2 group">
                        <a href="profil.php" class="flex flex-col items-center text-slate-50 pl-1 group-hover:text-yellow-200">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-slate-50 stroke-1 transition ease-linear duration-150  group-hover:stroke-yellow-200">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                             </svg>
    
                             Profil
                         </a>
                    </li>

                    <li class=" border-l-2 group">
                        <a href="deconnexion.php" class="flex flex-col items-center text-slate-50 pl-1 group-hover:text-yellow-200">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-slate-50 stroke-1 transition ease-linear duration-150  group-hover:stroke-yellow-200">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                          </svg>
    
                        déconnexion</a>
                    </li>
                </ul>

             </div>
        </div>

    </nav>
</header>
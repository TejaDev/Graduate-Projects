using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using Permaculture_Animal.Models;

namespace Permaculture_Animal.Controllers
{
    public class tblAnimalsController : Controller
    {
        private AnimalDBEntities db = new AnimalDBEntities();

        //GET: tblAnimals
        public ActionResult Index(string Gender, string strSearch)
        {

            //var tblAnimals = db.tblAnimals.Include(t => t.tblDisease).Include(t => t.tblSpecy);
            //return View(tblAnimals.ToList());

            var Animals = from b in db.tblAnimals
                                select b;

            var speciesList = from c in Animals
                              orderby c.AnimalSex
                              select c.AnimalSex;

            ViewBag.Gender = new SelectList(speciesList.Distinct());

            //Search records by Animal Name 
            if (!string.IsNullOrEmpty(strSearch))
                Animals = Animals.Where(m => m.AnimalName.Contains(strSearch));

            //Search records by Species

            if (!string.IsNullOrEmpty(Gender))
                Animals = Animals.Where(m => m.AnimalSex == Gender);
            return View(Animals.ToList());

        }

        // GET: tblAnimals/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tblAnimal tblAnimal = db.tblAnimals.Find(id);
            if (tblAnimal == null)
            {
                return HttpNotFound();
            }
            return View(tblAnimal);
        }

        // GET: tblAnimals/Create
        public ActionResult Create()
        {
            ViewBag.DiseaseID = new SelectList(db.tblDiseases, "DiseaseID", "DiseaseName");
            ViewBag.SpeciesID = new SelectList(db.tblSpecies, "SpeciesID", "SpeciesName");

            return View();
        }

        // POST: tblAnimals/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "AnimalID,AnimalName,AnimalSex,BirthDate,DeathDate,BirthPlace,FatherName,MotherName,SpeciesID,DiseaseID")] tblAnimal tblAnimal)
        {
            if (ModelState.IsValid)
            {
                db.tblAnimals.Add(tblAnimal);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            ViewBag.DiseaseID = new SelectList(db.tblDiseases, "DiseaseID", "DiseaseName", tblAnimal.DiseaseID);
            ViewBag.SpeciesID = new SelectList(db.tblSpecies, "SpeciesID", "SpeciesName", tblAnimal.SpeciesID);
            return View(tblAnimal);
        }

        // GET: tblAnimals/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tblAnimal tblAnimal = db.tblAnimals.Find(id);
            if (tblAnimal == null)
            {
                return HttpNotFound();
            }
            ViewBag.DiseaseID = new SelectList(db.tblDiseases, "DiseaseID", "DiseaseName", tblAnimal.DiseaseID);
            ViewBag.SpeciesID = new SelectList(db.tblSpecies, "SpeciesID", "SpeciesName", tblAnimal.SpeciesID);


            List<vAnimal>   AnimalList  = (from Animal in db.vAnimals
                                           where Animal.AnimalID == id
                                           select Animal).ToList();



            return View(tblAnimal);
        }

        // POST: tblAnimals/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "AnimalID,AnimalName,AnimalSex,BirthDate,DeathDate,BirthPlace,FatherName,MotherName,SpeciesID,DiseaseID")] tblAnimal tblAnimal)
        {
            if (ModelState.IsValid)
            {
                db.Entry(tblAnimal).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            ViewBag.DiseaseID = new SelectList(db.tblDiseases, "DiseaseID", "DiseaseName", tblAnimal.DiseaseID);
            ViewBag.SpeciesID = new SelectList(db.tblSpecies, "SpeciesID", "SpeciesName", tblAnimal.SpeciesID);
            return View(tblAnimal);
        }

        // GET: tblAnimals/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tblAnimal tblAnimal = db.tblAnimals.Find(id);
            if (tblAnimal == null)
            {
                return HttpNotFound();
            }
            return View(tblAnimal);
        }

        // POST: tblAnimals/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            tblAnimal tblAnimal = db.tblAnimals.Find(id);
            db.tblAnimals.Remove(tblAnimal);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}

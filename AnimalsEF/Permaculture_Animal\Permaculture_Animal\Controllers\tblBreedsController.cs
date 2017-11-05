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
    public class tblBreedsController : Controller
    {
        private AnimalDBEntities db = new AnimalDBEntities();

        // GET: tblBreeds
        public ActionResult Index(string searchString)
        {
            var Breeds = from m in db.tblBreeds
                           select m;

            if (!String.IsNullOrEmpty(searchString))
            {
                Breeds = Breeds.Where(s => s.BreedName.Contains(searchString));
            }

            return View(Breeds);
        }

        // GET: tblBreeds/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tblBreed tblBreed = db.tblBreeds.Find(id);
            if (tblBreed == null)
            {
                return HttpNotFound();
            }
            return View(tblBreed);
        }

        // GET: tblBreeds/Create
        public ActionResult Create()
        {
            ViewBag.SpeciesID = new SelectList(db.tblSpecies, "SpeciesID", "SpeciesName");
            return View();
        }

        // POST: tblBreeds/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "BreedID,BreedName,SpeciesID")] tblBreed tblBreed)
        {
            if (ModelState.IsValid)
            {
                db.tblBreeds.Add(tblBreed);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            ViewBag.SpeciesID = new SelectList(db.tblSpecies, "SpeciesID", "SpeciesName", tblBreed.SpeciesID);
            return View(tblBreed);
        }

        // GET: tblBreeds/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tblBreed tblBreed = db.tblBreeds.Find(id);
            if (tblBreed == null)
            {
                return HttpNotFound();
            }
            ViewBag.SpeciesID = new SelectList(db.tblSpecies, "SpeciesID", "SpeciesName", tblBreed.SpeciesID);

            List<vBreed> BreedList = (from Breed in db.vBreeds
                                      where Breed.BreedID == id
                                      select Breed).ToList();

            return View(tblBreed);
        }

        // POST: tblBreeds/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "BreedID,BreedName,SpeciesID")] tblBreed tblBreed)
        {
            if (ModelState.IsValid)
            {
                db.Entry(tblBreed).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            ViewBag.SpeciesID = new SelectList(db.tblSpecies, "SpeciesID", "SpeciesName", tblBreed.SpeciesID);
            return View(tblBreed);
        }

        // GET: tblBreeds/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tblBreed tblBreed = db.tblBreeds.Find(id);
            if (tblBreed == null)
            {
                return HttpNotFound();
            }
            return View(tblBreed);
        }

        // POST: tblBreeds/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            tblBreed tblBreed = db.tblBreeds.Find(id);
            db.tblBreeds.Remove(tblBreed);
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
